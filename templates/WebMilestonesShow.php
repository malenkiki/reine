<aside id="featured" class="body">
    <article>
        <figure>
            <img src="img/logo/<?= $prj->slug ?>.png" alt="<?= sprintf(_('Project’s logo for %s'), $prj->name) ?>" />
        </figure>
        <hgroup>
        <h2><?= $prj->name ?></h2>
        <h3><?= $prj->short ?></h3>
        </hgroup>
        <p><?= Malenki\Ruche\Util\RichText::getFormated($prj->description) ?></p>

    </article>
</aside>
 
<section id="content" class="body">
<?php if(count($mls)): ?>
	<ol id="posts-list" class="hfeed">
        <?php foreach($mls as $m): ?>
        <li>
            <article class="hentry">	
                <header>
                <h2 class="entry-title"><a href="/project/<?= $prj->slug ?>/roadmap/<?= $m->id ?>" rel="bookmark" title="Permalink to this <?= $m->name ?>"><?= $m->name ?></a></h2>
                </header>
 
                <footer class="post-info">
                    <abbr class="published" title="<?= $m->ttd ?>">
                        <?= $m->ttd ?>
                    </abbr>
     
                    <!-- à faire -->
                    <address class="vcard author">
                        Par <a class="url fn" href="#">Michel Petit</a>
                    </address>
                </footer>
     
                <div class="entry-content">
                <p><?= $m->description ?></p>
                </div>
            </article>
        </li>
        <?php endforeach; ?>
	</ol>
<?php else: ?>
    <p><a href="#"><?= _('No milestone defined. You can create one now') ?></a></p>
<?php endif; ?>
</section>

	
