<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
   
  <?php 
  	if (have_posts()) {
    the_post();
   ?>  
 	<div class="container container--narrow page-section">
 	
	    <div class="generic-content">
	      <?php the_content(); ?>
	    </div> 
	</div>    
  <?php 
	}


  get_footer();

?>