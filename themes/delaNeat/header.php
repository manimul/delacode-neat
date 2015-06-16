<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package some_like_it_neat
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<style type="text/css">
		<?php if ( 'no' === get_theme_mod( 'some-like-it-neat_post_format_support' ) ): ?>
			h1.entry-title:before {
				display: none;
			}
		<?php endif; ?>
	</style>

    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'some-like-it-neat' ); ?></a>

		<?php tha_header_before(); ?>
		<header id="masthead" class="site-header wrap" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<?php tha_header_top(); ?>
		
		
		        	<nav id="primary-nav" class="main-navigation"  role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
		        	<img id="logo" src="<?php echo do_shortcode( '[acf field="logo-image" post_id="39"]' ) ?>">
				<button class="menu-button">
					<span class="dashicons <?php echo get_theme_mod( 'some_like_it_neat_mobile_nav_icon', 'dashicons-menu' ); ?>"></span><?php echo get_theme_mod( 'some_like_it_neat_mobile_nav_label', 'Menu' ); ?>
				</button>
		        <?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary-navigation',
							'menu_class' => 'flexnav', //Adding the class for FlexNav
							'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'some_like_it_neat_mobile_min_width', '768' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
						)
					);
				?>

			</nav><!-- #site-navigation -->
			
			
		<img class="header-image" src="<?php echo do_shortcode( '[acf field="background-image" post_id="39"]' ) ?>">
		
		<div class="hero-wrapper">
		
			<div class="site-branding">
		
				<div class="site-title"><h1><?php echo do_shortcode( '[acf field="header-text" post_id="39"]' ) ?></h1></div>
				<div class="site-description"><h3><?php echo do_shortcode( '[acf field="subtitle-text" post_id="39"]' ) ?></h3></div>
				<button><span><?php echo do_shortcode( '[acf field="action-button" post_id="39"]' ) ?></span></button>
			</div>
			</div>

		
			<?php tha_header_bottom(); ?>

		</header><!-- #masthead -->
		<section id="sub-header"><div class="sub-text-container"><span><?php echo do_shortcode( '[acf field="sub-text" post_id="39"]' ) ?></span></div></section>
		<?php tha_header_after(); ?>

		<?php tha_content_before(); ?>
		<main id="main" class="site-main wrap" role="main">
			<?php tha_content_top(); ?>
