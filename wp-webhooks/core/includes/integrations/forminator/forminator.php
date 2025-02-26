<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WP_Webhooks_Integrations_forminator Class
 *
 * This class integrates all Forminator related features and endpoints
 *
 * @since 4.2.2
 */
class WP_Webhooks_Integrations_forminator {

    // PHP 8.2 compatibility requires the declaration of all properties
    public $details;
    public $helpers;
    public $auth;
    public $actions;
    public $triggers;

    public function is_active(){
        return class_exists( 'Forminator' );
    }

    public function get_details(){
        $integration_url = plugin_dir_url( __FILE__ );

        return array(
            'name' => 'Forminator',
            'icon' => $integration_url . '/assets/img/icon-forminator.png',
        );
    }

}
