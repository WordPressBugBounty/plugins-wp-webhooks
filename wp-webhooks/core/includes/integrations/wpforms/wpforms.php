<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WP_Webhooks_Integrations_wpforms Class
 *
 * This class integrates all WPForms related features and endpoints
 *
 * @since 4.2.0
 */
class WP_Webhooks_Integrations_wpforms {

    // PHP 8.2 compatibility requires the declaration of all properties
    public $details;
    public $helpers;
    public $auth;
    public $actions;
    public $triggers;

    public function is_active(){
        return class_exists( 'WPForms' );
    }

    public function get_details(){
        $integration_url = plugin_dir_url( __FILE__ );

        return array(
            'name' => 'WPForms',
            'icon' => $integration_url . '/assets/img/icon-wpforms.png',
        );
    }

}
