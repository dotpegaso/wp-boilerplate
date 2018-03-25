<?php get_header(); ?>

<main class="clearfix">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
		</article>
	<?php endwhile; else: ?>
		<p><?php _e( "There's no posts!" ); ?></p>
  	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>