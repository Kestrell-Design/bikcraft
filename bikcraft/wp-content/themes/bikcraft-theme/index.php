<?php get_header();?> <!-- wp header -->



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- wp loop -->
	
	<?php the_title(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>  <!-- wp loop final -->


<?php get_footer(); ?> <!-- wp footer -->