<?php get_header();?> <!-- wp header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- wp loop -->
	
<section class="introducao">
	<div class="container">
        <h1>404</h1>	
        <p>A página que você está tentando asseçar pode ter sido renmovida</p>	
        <a href="/bikcraft/produtos/" class="btn">Voltar para Home</a>
	</div>
</section>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>  <!-- wp loop final -->


<?php get_footer(); ?> <!-- wp footer -->