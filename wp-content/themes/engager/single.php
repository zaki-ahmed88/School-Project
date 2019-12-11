<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package engager
 */

get_header(); ?>

<section class="inner-banner">
	<?php if (get_header_image() != '') {?>
		<img src="<?php echo esc_url(get_header_image()); ?>" class="img-responsive center-block" alt="">
	<?php }  ?>
</section>

<section class="inner-page blog-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<?php $sidebar =  esc_attr(get_theme_mod('select_post_sidebar','right'));
				if($sidebar=='left'|| $sidebar=='right'){
					$class ='col-md-8';
				}
				else {
					$class='col-md-12';
				}
			?>

			<?php
	            if ($sidebar == 'left'){ 
	            	get_sidebar('left');
	            }
            ?>
			
			<div class="<?php echo esc_attr($class);?>">
			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile; // End of the loop.
			?>
			</div>
			<?php
	            if ($sidebar == 'right'){ 
	            	get_sidebar('right');
	            }
            ?>
		</div>
	</div>
</section>
<?php
get_footer();
