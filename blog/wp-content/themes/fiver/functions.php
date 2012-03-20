<?php

if ( ! isset( $content_width ) ) $content_width = 550;

register_sidebar(array(
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widgettitle">',
	'after_title' => '</h3>',
));

add_theme_support('automatic-feed-links');

?>
