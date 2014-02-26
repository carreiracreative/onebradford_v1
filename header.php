<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package OneBradford_v1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
<div id="container" class="cf">  
<a name="ob-header"></a>
  <header class="span12">
  	<div class="inner cf">
  		<h1 class="alt span4"><img id="OB-logo" style="padding-top:100px;" src="http://cla6ixdesign.com/staging/wp-content/uploads/one-bradford/OB-Logo-Header.png"></h1>
  	<nav id="OB-nav" class="span8 col" style="padding-top:135px;">
			<ul class="cf">
				<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'onebradford_v1' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'onebradford_v1' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</ul>
		</nav><!-- #site-navigation -->			
	</div>
  </header>

</head>