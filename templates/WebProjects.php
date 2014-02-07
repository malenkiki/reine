<aside id="featured" class="body">
    <article>
	<!--figure>
		<img src="img/logo/phantastic.png" alt="Logo du projet Phantastic" />
	</figure-->
	<hgroup>
 
		<h2>Phantastic</h2>
		<h3><a href="#">Un générateur de site web statique</a></h3>
	</hgroup>
	<p>À l’instar de <a href="http://jekyllrb.com/" rel="external">Jekyll</a> écrit en ruby, Phantastic en est un équivalent en PHP, avec plusieurs fonctionnalités en natif, permettent d’avoir un blog statique clé en main, avec gestion des tags, un système de gabarit par défaut, etc.</p>
 
    </article>
 
<?php foreach($prj as $p): ?>
    <article>
        <!--figure></figure-->
        <hgroup>
            <h2><?= $p->name ?></h2>
            <h3><a href="<?= $p->slug ?>"><?= $p->short ?></a></h3>
        </hgroup>
        <p><?= $p->description ?></p>
    </article>
<?php endforeach; ?>
</aside>
