<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WP_Webhooks_Integrations_wp_webhooks Class
 *
 * This class integrates all Contact Form 7 related features and endpoints
 *
 * @since 4.2.0
 */
class WP_Webhooks_Integrations_wp_webhooks {

    // PHP 8.2 compatibility requires the declaration of all properties
    public $details;
    public $auth;
    public $helpers  = '';
    public $actions  = '';
    public $triggers = '';

    public function is_active(){
        return true;
    }

    public function get_details(){
        $integration_url = plugin_dir_url( __FILE__ );

        return array(
            'name' => 'WP Webhooks',
            'icon' => $integration_url . '/assets/img/icon-wp-webhooks.svg',
        );
    }

}
