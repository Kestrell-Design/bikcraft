<?php $portfolio = get_page_by_title('portfolio'); ?> <!--Pegar infos da Página -->

<section class="portfolio">
  <div class="container">
    <h2 class="subtitulo">Portfólio</h2>
    <div class="portfolio_lista">

		<div class="grid-8"><img src="<?php echo get_template_directory_uri();?>/img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
		<div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
		<div class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
    </div>

    <?php if (!is_page('portfolio')) { ?> <!-- Condição para mostar ou ocultar item (! not) -->
  <div class="call">
		  <p>conheça mais o nosso portfólio</p>
		  <a href="portfolio.html" class="btn">Portfólio</a>
	  </div>
<?php } ?>
	
    </div>  
</section>


