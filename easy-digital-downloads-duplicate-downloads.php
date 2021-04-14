<?php
/*
Plugin Name: Easy Digital Downloads - Duplicate Downloads
Plugin URI: https://easydigitaldownloads.com/downloads/duplicate-download/
Description: Duplicates EDD Downloads
Version: 1.0.1
Author: Sandhills Development, LLC
Author URI: https://sandhillsdev.com
Text Domain: duplicate_downloads
 */

function edd_dd_wp() {
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		require_once( dirname( __FILE__ ) . '/duplicate.php' );

		if ( is_admin() ) {
			require_once( dirname( __FILE__ ) . '/admin.php' );
		}

		$license = new EDD_License( __FILE__, 'Duplicate Downloads', '1.0.1', 'Sandhills Development, LLC', null, null, 74950 );
	}
}
add_action( 'plugins_loaded', 'edd_dd_wp' );
