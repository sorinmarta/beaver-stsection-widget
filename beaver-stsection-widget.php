<?php

/**
 * Plugin Name: Beaver Builder STSection Widget
 * Plugin URI: http://sorinmarta.com/beaver-stsection-widget
 * Description: An extension pack that allows you to add a nice looking stsection widget to your site
 * Version: 1.0
 * Author: Sorin Marta
 * Author URI: http://sorinmarta.com
 */

define('SMARTAST_SLUG', 'beaver-stsection-widget');
define('SMARTAST_PATH', WP_PLUGIN_DIR . '/' . SMARTAST_SLUG);

define('SMARTAST_APP', SMARTAST_PATH . '/app');
define('SMARTAST_MODULES', SMARTAST_APP . '/modules');

define('SMARTAST_LINK', plugin_dir_url(__FILE__));
define('SMARTAST_LINK_APP', SMARTAST_LINK . 'app');
define('SMARTAST_LINK_MODULES', SMARTAST_LINK_APP . '/modules');

class Beaver_STSection_Widget{
	public function __construct(){
		add_action('init', array($this, 'load_modules'));
		add_action('activate_'. SMARTAST_SLUG .'/'. SMARTAST_SLUG .'.php', array($this, 'activate'));
	}

	public function activate(): void
	{
		if(!class_exists('FLBuilderLoader')){
			wp_die('Beaver Builder is not active. Please install and activate Beaver Builder');
		}
	}

	public function load_modules(): void
	{
		require SMARTAST_MODULES . '/stsection/smartast_stsection.php';
	}
}

new Beaver_STSection_Widget();