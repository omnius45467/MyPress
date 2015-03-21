<?php /* Template Name: Page Template */ get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="col-md-4">

				<h1><?php the_title(); ?></h1>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<br class="clear">

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>
				
			</div>
			<div class="col-md-8">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet at, dolor dolorem ducimus ea eligendi esse facere id incidunt, necessitatibus nihil quidem ratione repudiandae rerum unde voluptatem? Libero, omnis.
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
