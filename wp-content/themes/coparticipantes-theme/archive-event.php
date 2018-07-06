<?php

get_header();
pageBanner(array(
  'title' => 'Todos os Eventos',
  'subtitle' => 'Veja todos os nossos eventos.'
));
 ?>

<div class="container container--narrow page-section">
<?php
  
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/content-event');
   }
  echo paginate_links();
?>

<hr class="section-break">

<p>Procurando por eventos passados? <a href="<?php echo site_url('/past-events') ?>">Veja nosso arquivo de eventos passados</a>.</p>

</div>

<?php get_footer();

?>