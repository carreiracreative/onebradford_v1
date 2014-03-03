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
  		<h1 class="alt span4"><img id="OB-logo" style="padding-top:100px;max-width:99%;" src="http://cla6ixdesign.com/staging/wp-content/uploads/one-bradford/OB-Logo-Header.png"></h1>
  	<nav id="OB-nav" class="span8 col">
			<ul class="cf">
				<li><a class="alt" href="http://onebradford.com/#Contact">CONTACT</a></li>
				<li><a class="alt" href="http://onebradford.com/#Social">SOCIAL</a></li>
				<li><a class="alt" href="http://onebradford.com/#Services">SERVICES</a></li>
				<li><a class="alt" href="http://onebradford.com/#About">ABOUT</a></li>
			</ul>
		</nav><!-- #site-navigation -->			
	</div>
  </header>

</head>