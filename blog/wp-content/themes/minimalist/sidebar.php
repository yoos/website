<div id="leftcol" >
<div id="menu">

<ul>
	<?php if (!dynamic_sidebar()) : ?>
	<li><?php get_search_form(); ?></li>
</ul>

<ul role="navigation">
	<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
	<li><h2>Archives</h2>
		<ul>
		<?php wp_get_archives(array('type' => 'monthly')); ?>
		</ul>
	</li>

	<?php wp_list_categories(array('show_count' =>1, 'title_li' => '<h2>Categories</h2>')); ?>
</ul>

<ul>
	<?php if (is_home() || is_page()) {   /* Is this the front page? */ ?>
		<?php wp_list_bookmarks(); ?>

		<li><h2>Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul></li>
	<?php } endif; ?>
</ul>

</div>
</div>

