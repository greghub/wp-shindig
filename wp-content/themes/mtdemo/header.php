<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/gmf0oou.js"></script>
<script type="text/javascript" >try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$("#menu-main-menu .menu-item-has-children").click(function(e){
		$(this).toggleClass("open");
	});
	$(".menu-button").click(function(){
		$(".menu-main-menu-container").toggle();
	});
})
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="top">
		<?php if ( get_theme_mod('header_right_text') ) { ?>
			<div class="header-right-text-stuff">
				<?php echo '' .get_theme_mod( 'header_right_text', '' )."\n";?>
			</div>
		<?php } ?>
	</div>
	<header id="masthead" class="site-header clearfix" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">

			<hgroup>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img class="desktop logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/wp-calendar-logo.png">
						<img class="mobile logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/wp-calendar-logo-mobile.png">
					</a>
				</h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<div class="mobile mobile-nav">
				<div class="menu-button">
					<i class="mobile-icon menu-icon"></i> Menu
				</div>
				<div class="menu-pssst">
					<i class="mobile-icon pssst-icon"></i>
				</div>
			</div>

			<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'nav-menu' ) ); ?>

		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper clearfix">
