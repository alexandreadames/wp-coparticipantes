<?php 

function coparticipantes_post_types() {

/*========================================
            EVENT POST TYPE
========================================*/

 //Register
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

/*-----------------------------------
  Events Custom Fields
/*-----------------------------------*/



/*========================================
            SUBSCRIPTION POST TYPE
========================================*/
  // Register
  register_post_type('subscription', array(
    //'capability_type' => 'event',
    //'map_meta_cap' => true,
    'supports' => array('title'),
    'rewrite' => array('slug' => 'subscriptions'),
    'has_archive' => false,
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Inscrições',
      'add_new_item' => 'Add Nova Inscrição',
      'edit_item' => 'Editar Inscrição',
      'all_items' => 'Todas as Inscrições',
      'singular_name' => 'Inscrição'
    ),
    'menu_icon' => 'dashicons-format-aside'
  ));

/*-----------------------------------
  Subscription Custom Fields
/*-----------------------------------*/

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_subscription-custom-fields',
    'title' => 'Subscription Custom Fields',
    'fields' => array (
      array (
        'key' => 'field_5b3ff5fcebdc4',
        'label' => 'event_id',
        'name' => 'event_id',
        'type' => 'number',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_5b3ff60bebdc5',
        'label' => 'user_id',
        'name' => 'user_id',
        'type' => 'number',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'subscription',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}


}

add_action('init', 'coparticipantes_post_types');
