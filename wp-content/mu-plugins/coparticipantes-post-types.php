<?php 

function coparticipantes_post_types() {

 // Event Post type
  register_post_type('event', array(
    //'capability_type' => 'event',
    //'map_meta_cap' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Eventos',
      'add_new_item' => 'Add Novo Evento',
      'edit_item' => 'Editar Evento',
      'all_items' => 'Todos os Eventos',
      'singular_name' => 'Evento'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

}

add_action('init', 'coparticipantes_post_types');
