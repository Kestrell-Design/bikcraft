<?php
// Template Name: Portfólio
get_header();
// wp header
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- wp loop -->


		<?php include(TEMPLATEPATH . "/includes/intro-interna.php"); ?> <!-- Include Introdução Interna -->

		<section class="container animar-interno">
			<ul class="rslides">
				<li>
					<blockquote class="quote_clientes">
						<p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.”</p>
						<cite>Barbara Moss</cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição.”</p>
						<cite>Jhony Rato</cite>
					</blockquote>
				</li>

				<li>
					<blockquote class="quote_clientes">
						<p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vida nada igual.”</p>
						<cite>Bernardo</cite>
					</blockquote>
				</li>
			</ul>
		</section>

		<?php include(TEMPLATEPATH . "/includes/galeria-portfolio.php"); ?> <!-- Include Fotos do Portfólio -->

		<?php include(TEMPLATEPATH . "/includes/quote-cta.php"); ?> <!-- Include Quote -->

		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?> <!-- wp loop final -->

	<?php get_footer(); ?> <!-- wp footer -->