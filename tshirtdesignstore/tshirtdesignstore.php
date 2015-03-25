<?php
/**
 * Plugin Name: T-Shirt Design Store.
 * Plugin URI: http://cmssuperheroes.com
 * Description: T-Shirt Design Store.
 * Version: 1.0.0
 * Author: cmssuperheroes.com
 * Author URI: http://cmssuperheroes.com
 * Text Domain: tshirtdesignstore
 * Domain Path: /language/
 * License: GPL2
 */
define( 'SD_URI',plugin_dir_url( __FILE__ ) );
define( 'SD_ABS',plugin_dir_path( __FILE__ ) );
define( 'SD_NAME','tshirtdesignstore' );
require_once( SD_ABS.'functions.php' );
class tshirtdesignstore {
	public function __construct(){
		//add_action('admin_menu',array($this,'admin_menu'));
		add_action('admin_enqueue_scripts', array($this,'admin_enqueue_scripts'));
		add_action('wp_enqueue_scripts', array($this,'enqueue_scripts'));
	}
	public static function admin_enqueue_scripts() {
		$ajax_url = site_url().'/wp-admin/admin-ajax.php';
		wp_register_script('tshirtdesignstore',SD_URI. 'js/tshirtdesignstore.js');
		$translation_array = array(
			'ajax_url' => $ajax_url
		);
		wp_localize_script( 'tshirtdesignstore', 'tshirtdesignstore', $translation_array );
		// Enqueued script with localized data.
		wp_enqueue_script( 'tshirtdesignstore' );
	}
	public static function enqueue_scripts() {		
		wp_enqueue_style( 'shortcodes.css', SD_URI.'css/tshirtdesignstore.css' );
	}

	public static function admin_menu(){
		add_theme_page('T-Shirt', 'T-Shirt', 'manage_tshirt', 'manage_tshirt', array('manage_tshirt','admin_page'));

	}	
	public static function admin_page(){
	
	}
}
$tshirtdesignstore = new tshirtdesignstore();