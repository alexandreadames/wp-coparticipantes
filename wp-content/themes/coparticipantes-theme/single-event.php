<?php
  
  get_header();

  //Create a new subscription
  if ( ! empty( $_POST ) ) {
    insertSubscription($_POST);
  }

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

      <?php 

      echo '<hr class="section-break">';
      echo '<h2 class="headline headline--medium">Localização do Evento</h2>';

        $mapLocation = get_field('map_location');
      ?>



      <div class="acf-map">
          <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
            <h3><?php the_title(); ?></h3>
            <?php echo $mapLocation['address']; ?>
          </div>
      </div>

      <hr class="section-break">
      <h2 class="headline headline--medium">Evento Gratuito</h2>

      <?php 
       //Verificar se o usuário já se cadastrou nesse evento
       $userIsSubscribed = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'subscription',
            'meta_query' => array(
              array(
                'key' => 'user_id',
                'compare' => '=',
                'value' => get_current_user_id(),
                'type' => 'numeric'
              ),
              array(
                'key' => 'event_id',
                'compare' => '=',
                'value' => get_the_ID(),
                'type' => 'numeric'
              ),
            )
          ));
 
       if ($userIsSubscribed->have_posts()){
          echo "Você já está inscrito nesse evento";
       }

       //Free Event
       if (get_field('event_type') === 'free_event'){?>
        <form action="" method="post">
          <input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>">
          <input type="hidden" name="event_id" value="<?php echo get_the_ID();?>">
          <input type="submit" class="btn btn--large btn--orange" value="Cadastre-se"/>
        </form>
          
       <?php
        }
       //Paid Event
       else {
          echo "Esse evento é pago, para efetuar o cadastro é necessário pagar uma taxa";  
       }

       ?>


    </div>
    
  <?php }

  get_footer();

?>