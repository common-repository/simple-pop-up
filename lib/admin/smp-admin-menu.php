<?php 

class simple_pop_ups_admin {

  function __construct() {
    add_action('init',array($this,'create_post_type'));
  }

  function create_post_type() {
    $labels = array(
      'name'               => 'Simple Modals',
      'singular_name'      => 'Simple Modals',
      'menu_name'          => 'Simple Modals',
      'name_admin_bar'     => 'Simple Modals',
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Modal',
      'new_item'           => 'New Modal',
      'edit_item'          => 'Edit Modal',
      'view_item'          => 'View Modal',
      'all_items'          => 'All Modal',
      'search_items'       => 'Search Modal',
      'parent_item_colon'  => 'Parent Modal',
      'not_found'          => 'No Modal',
      'not_found_in_trash' => 'No Modal Found in Trash'
      );

    $args = array(
      'labels'              => $labels,
      'public'              => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_in_nav_menus'   => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-admin-comments',
      'capability_type'     => 'post',
      'hierarchical'        => false,
      'has_archive'         => true,
      'rewrite'             => array( 'slug' => 'simple_modal' ),
      'query_var'           => true
      );

    register_post_type( 'simple_modal', $args );
  }
}

new simple_pop_ups_admin;