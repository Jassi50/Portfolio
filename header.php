<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio-Jassi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio-jassi' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		</div><!-- .site-branding -->
		<div class="nav-container">	
		<nav class="navbar-header">
			<div id="logo-header">
			<a href="<?php echo get_permalink( 6 ); ?>">
			<?php get_template_part( 'pictures/logo' );?> </a>
			</div>
				<div class="menu-toggle-header" id="mobile-menu">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
				<ul class="nav-menu-header">
					<li><a href="<?php echo get_permalink( 2 ); ?>" class="nav-links1">About</a></li>
					<li><a href="<?php echo get_post_type_archive_link('portfolio-work'); ?>" class="nav-links1">Work</a></li>
					<li><a href="<?php echo get_permalink( 9 ); ?>" class="nav-links1">Contact</a></li>
				</ul>
			</nav>
		</div>
		
	</header><!-- #masthead -->
