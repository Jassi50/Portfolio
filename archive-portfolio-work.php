<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Underscore
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<section class= "container-archive">
			<?php
			
			while ( have_posts() ) :
				the_post();
				?><article class="article-archive"> <h2 class="title-archive"><?php the_title(); ?></h2> 
				<div class="img-archive"> <?php the_post_thumbnail(''); ?></div>
				<?php the_excerpt(); ?>
				
				<a class="button-archive" href="<?php echo get_permalink(); ?>">Read More </a> 
			</article>
			
			<?php
			endwhile;
			?></section><?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
