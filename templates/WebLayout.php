<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Projet Phantastic – Ruche</title>
        <link rel="stylesheet" href="/css/highlight-js/github.css">
        <script src="/js/highlight-js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <link rel="stylesheet" href="/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="/css/screen.css" type="text/css" />
    </head>
     
    <body>
        <?php if(!$is500): ?>
        <?php require('WebHeader.php') ?> 
        <?php require(sprintf('%s.php', $tpl)); ?>
        <?php require('WebFooter.php') ?> 
        <?php else: ?>
        <p>Erreur de connection au serveur ou erreur serveur.</p>
        <?php endif; ?>
    </body>
</html>

