<form method="POST" action="/projects/create">
<label for="id-name"><?= _('Name:') ?></label><input type="text" id="id-name" name="name" />
    <p><label for="id-short"><?= _('Short description:') ?></label><input type="text" id="id-short" name="short" /></p>
    <p><label for="id-description"><?= _('Long description:') ?></label><textarea id="id-description" name="description"></textarea></p>
    <p><label for="id-rcs"><?= _('RCS:') ?></label>
    <select id="id-rcs" name="rcs">
        <option value="git">Git</option>
        <option value="hg">Mercurial</option>
        <option value="svn">Subversion</option>
    </select></p>
    <p><label for="id-path"><?= _('Path:') ?></label><input type="text" id="id-path" name="path" /></p>
    <p><label for="id-acl"><?= _('ACL:') ?></label><input type="text" id="id-acl" name="acl" /></p>
    <p><input type="submit" value="<?= _('Create new project') ?>" /></p>
</form>
