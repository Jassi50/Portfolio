<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Portfolio-Jassi
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses portfolio_jassi_header_style()
 */
function portfolio_jassi_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'portfolio_jassi_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'portfolio_jassi_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'portfolio_jassi_custom_header_setup' );

if ( ! function_exists( 'portfolio_jassi_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see portfolio_jassi_custom_header_setup().
	 */
	function portfolio_jassi_header_style() {
		$header_text_color = get_header_textcolor();


		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		?>
		<style type="text/css">
		<?php
		
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
