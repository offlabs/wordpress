<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url') ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url') ?>/css/sticky-footer-navbar.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url') ?>/css/main.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
    /* 
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
     
    wp_get_archives('type=monthly&format=link');
?>
</head>
<body>
    <div class="container">
    	<div class="topmenu"><?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav nav-tabs', 'theme_location' => 'primary-menu') ); ?></div>