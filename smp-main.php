<?php
/*
 * Plugin Name: Simple Pop Up
 * Plugin URI: 
 * Description: Simple pop up with customizable content!Credits to w3school.How it works : [pop_me_up id='id of pop up' btn_name="name of button"]
 * Author: Rey Den Nalasa
 * Text Domain: awsome-pop-up
 * Domain Path: /languages
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ){ exit; }
define( 'SMM_VERSION', '1.0.0' );
define( 'SMM_URL', plugin_dir_url( __FILE__ ) );
define( 'SMM_PATH', plugin_dir_path( __FILE__ ) );
define( 'SMM_BASENAME', plugin_basename( __FILE__ ) );


require_once(SMM_PATH.'lib/admin/smp-admin-menu.php');
require_once(SMM_PATH.'lib/functions/scripts.php');
require_once(SMM_PATH.'lib/functions/functions.php');
