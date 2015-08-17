<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,900,700italic,700,400italic,900italic' rel='stylesheet' type='text/css'>
<!--Get the scripts and styles -->
<?php get_template_part( 'import_scripts' ); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-hijacking="off" data-animation="scaleDown">
	<!-- Nav and Logo
	================================================== -->

	<div class="cd-header">
	
		<a href="#cd-nav" class="cd-nav-trigger">Menu 
			<span class="cd-nav-icon"></span>

			<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
				<circle fill="transparent" stroke="#000000" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
			</svg>
		</a>
	
		<div class="logo">
			<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
		</div>
	
	</div>
	
	<div id="cd-nav" class="cd-nav">
		<div class="cd-navigation-wrapper">
			<div class="cd-half-block">
				<nav>
					<ul class="cd-primary-nav">
						<li class="cd-label"><a href="/" class="selected">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Products</a></li>
						<li><a href="#">Shop</a></li>
						<li class="cd-label"><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div><!-- .cd-half-block -->
			
			<div class="cd-half-block">
				<address>
					<ul class="cd-contact-info">
						<li><a href="mailto:info@riebekjoinery.co.za">info@ridgebackjoinery.co.za</a></li>
						<li>021 863 0336</li>
						<li>
							<span>Ridgeback Joinery </span>
							<span>No 20 Hans Strydom Street</span>
							<span>Parow</span>
						</li>
						<li>
							<a href="#" class="tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true","margin":30}'><span class="nav-social">&#xf099;</span></a>
							<a href="#" class="tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true","margin":30}'><span class="nav-social">&#xf09b;</span></a>
							<a href="#" class="tipped" data-title="dropbox"  data-tipper-options='{"direction":"top","follow":"true","margin":30}'><span class="nav-social">&#xf16b;</span></a>
							<a href="#" class="tipped" data-title="skype"  data-tipper-options='{"direction":"top","follow":"true","margin":30}'><span class="nav-social">&#xf17e;</span></a>
						</li>
					</ul>
				</address>
			</div> <!-- .cd-half-block -->
		</div> <!-- .cd-navigation-wrapper -->
	</div> <!-- .cd-nav -->

	<!-- Primary Page Layout
	================================================== -->	
	
