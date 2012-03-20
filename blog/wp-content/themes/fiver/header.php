<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link href='http://fonts.googleapis.com/css?family=Inconsolata|Lato:400,400italic,900&v2' rel='stylesheet' type='text/css' />

		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php
    if (!is_admin()) {
      //enable html5 support for older browsers. You can remove this if you don't care about old browsers
      //wp_register_script('html5_shim', get_template_directory_uri() . '/html5.js');
      //wp_enqueue_script('html5_shim');
    }
    ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	
		<header>
			<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
			<!--<?php bloginfo('description'); ?>-->
		</header>

		<section>
