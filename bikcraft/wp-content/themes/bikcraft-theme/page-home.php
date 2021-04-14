<?php
// Template Name: Home
?>

<?php get_header();?> <!-- wp header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- wp loop -->

		<section class="introducao">
			<div class="container">
				<h1>Bicicletas Feitas a Mão</h1>
				<blockquote class="quote-externo">
					<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
					<cite>WILLIAM MORRIS</cite>
				</blockquote>
				<a href="/bikcraft/produtos/" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.png" alt="Bikcraft Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.png" alt="Bikcraft Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>

			</ul>

			<div class="call">
				<p>clique aqui e veja os detalhes dos produtos</p>
				<a href="produtos.html" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->


		<?php include(TEMPLATEPATH . "/includes/galeria-portfolio.php"); ?> <!-- Include Fotos do Portfólio -->



		<?php include(TEMPLATEPATH . "/includes/qualidade-bikcraft.php"); ?> <!-- Include Qualidade Bikcraft -->

		<?php include(TEMPLATEPATH . "/includes/quote-cta.php"); ?> <!-- Include Quote -->

	

		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?> <!-- wp loop final -->

		<?php get_footer(); ?><!-- wp footer -->