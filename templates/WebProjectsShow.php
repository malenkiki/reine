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

	
<section id="extras" class="body">
<!-- Cette liste correspondra aux événements, sera mise à jour via Ajax, une ligne par événement -->
	<div class="activityroll">
		<h2>Activité</h2>
 
		<ul>
            <li><a href="#"><abbr class="published" title="2013-03-20T20:18:45+01:00">Aujourd’hui à 20h10</abbr> Révision <strong class="revision">[3045]</strong> par <strong class="author">Malenki</strong> <em>Corrige un test foireux</em></a></li>
            <li><a href="#"><abbr class="published" title="2013-03-20T20:18:45+01:00">Aujourd’hui à 18h20</abbr> Le ticket <strong class="ticket">#745</strong> a été créé par <strong class="author">Elvis</strong> <em>La génération de page échoue sur Windows Vista avec PHP 5.3</em></a></li>
            <li><a href="#"><abbr class="published" title="2013-03-20T20:18:45+01:00">Aujourd’hui à 14h30</abbr> Le ticket <strong class="ticket">#744</strong> a été créé par <strong class="author">Malenki</strong> <em>Créer de nouvelles entrées dans le fichier de configuration</em></a></li>
            <li><a href="#"><abbr class="published" title="2013-03-19T22:54:45+01:00">Hier à 22h54</abbr> Révision <strong class="revision">[3044]</strong> par <strong class="author">Elvis</strong> <em>Windows sucks, alors j’ai mis en place un hack…</em></a></li>
            <li><a href="#"><abbr class="published" title="2013-03-20T20:18:45+01:00">Hier à 20h02</abbr> Nouveau commentaire sur <strong class="ticket">#653</strong> par <strong class="author">Malenki</strong> <em>Serait-il possible d’utiliser la bibliothèque Yaml de Symfony pour…</em></a></li>
		</ul>
	</div>
 
</section>
 

