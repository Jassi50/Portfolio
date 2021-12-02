<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio-Jassi
 */

?>

	<footer id="colophon" class="site-footer">
		
		<nav id="footer-navigation" class="footer-navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
			<div class=logo-div>
			<a href="<?php echo get_permalink( 6 ); ?>">
			<?php get_template_part( 'pictures/logo' );?> </a>
			</div>
		</nav><!-- #site-navigation -->
		<p class="copyright">&copy; 2021 Jasmeet Brar</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
