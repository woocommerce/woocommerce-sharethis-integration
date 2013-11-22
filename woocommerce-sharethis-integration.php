<?php

/*
Plugin Name: WooCommerce ShareThis Integration
Description: Provides the integration between WooCommerce and ShareThis.
Author: WooThemes
Author URI: http://www.woothemes.com
Version: 1.0
*/

// Add the integration to WooCommerce
function wc_sharethis_add_integration( $integrations ) {
	global $woocommerce;

	if ( is_object( $woocommerce ) && version_compare( $woocommerce->version, '2.1', '>=' ) ) {
		include_once( 'includes/class-wc-sharethis-integration.php' );
		$integrations[] = 'WC_ShareThis';
	}
	
	return $integrations;
}

add_filter( 'woocommerce_integrations', 'wc_sharethis_add_integration' );