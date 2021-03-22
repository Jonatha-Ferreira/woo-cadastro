<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       jonatha.ferreira.com.br
 * @since      1.0.0
 *
 * @package    Woo_Cadastro
 * @subpackage Woo_Cadastro/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Cadastro
 * @subpackage Woo_Cadastro/includes
 * @author     Jonatha Ferreira <jonatha.php@gmail.com>
 */
class Woo_Cadastro_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-cadastro',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
