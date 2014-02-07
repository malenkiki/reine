<?php
/*
 * Copyright (c) 2014 Michel Petit <petit.michel@gmail.com>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */


namespace Malenki\Ruche\Util;

class Curl
{
    protected $url;

    protected static $arr_opt = array(
        //switch true/false
        'autoReferer' => CURLOPT_AUTOREFERER,
        'binaryTransfert' => CURLOPT_BINARYTRANSFER,
        'cookieSession' => CURLOPT_COOKIESESSION,
        'certInfo' => CURLOPT_CERTINFO,
        'crlf' => CURLOPT_CRLF,
        'dnsUseGlobalCache' => CURLOPT_DNS_USE_GLOBAL_CACHE,
        'failOnError' => CURLOPT_FAILONERROR,
        'fileTime' => CURLOPT_FILETIME,
        'followLocation' => CURLOPT_FOLLOWLOCATION,
        'forbidReuse' => CURLOPT_FORBID_REUSE,
        'freshConnect' => CURLOPT_FRESH_CONNECT,
        'header' => CURLOPT_HEADER,
        'headerOut' => CURLINFO_HEADER_OUT,
        'httpGet' => CURLOPT_HTTPGET,
        'post' => CURLOPT_POST,
        'put' => CURLOPT_PUT,
        'returnTransfer' => CURLOPT_RETURNTRANSFER,
        'upload' => CURLOPT_UPLOAD,

        // Integer
        'connectTimeOut' => CURLOPT_CONNECTTIMEOUT,
        'dnsCacheTimeOut' => CURLOPT_DNS_CACHE_TIMEOUT,
        'httpAuth' => CURLOPT_HTTPAUTH,
        'inFileSize' => CURLOPT_INFILESIZE,
        'timeOut' => CURLOPT_TIMEOUT,

        // String
        'cookie' => CURLOPT_COOKIE,
        'cookieFile' => CURLOPT_COOKIEFILE,
        'customRequest' => CURLOPT_CUSTOMREQUEST,
        'encoding' => CURLOPT_ENCODING,
        'interface' => CURLOPT_INTERFACE,
        'postFields' => CURLOPT_POSTFIELDS,
        'range' => CURLOPT_RANGE,
        'referer' => CURLOPT_REFERER,
        'url' => CURLOPT_URL,
        'userAgent' => CURLOPT_USERAGENT,
        'userPwd' => CURLOPT_USERPWD
    );

    protected $handler;

    public function __construct($url)
    {
        if(is_string($url))
        {
            $this->url = $url;
            $this->handler = curl_init($this->url);
        }
    }

    public function setOpt($key, $value)
    {
        curl_setopt($this->handler, $key, $value);
    }

    public function __set($name, $value)
    {
        if(array_key_exists($name, self::$arr_opt))
        {
            $this->setOpt(self::$arr_opt[$name], $value);
        }
        else
        {
            throw new \InvalidArgumentException(_('cURL option not available.'));
        }
    }

    public function execute()
    {
        $ret = curl_exec($this->handler);

        if(!$ret)
        {
            return null;
        }
        
        return json_decode($ret);
    }


    public function is500()
    {
        if($this->hasInfo())
        {
            return $this->getInfo()->http_code == 500;
        }
    }

    public function hasInfo()
    {
        return is_array(curl_getinfo($this->handler));
    }
    
    public function getInfo()
    {
        return (object) curl_getinfo($this->handler);
    }


    public function __destruct()
    {
        curl_close($this->handler);
    }


}
