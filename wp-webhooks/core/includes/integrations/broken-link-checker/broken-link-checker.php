<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WP_Webhooks_Integrations_broken_link_checker Class
 *
 * This class integrates all Broken Link Checker related features and endpoints
 *
 * @since 4.3.2
 */
class WP_Webhooks_Integrations_broken_link_checker {

    // PHP 8.2 compatibility requires the declaration of all properties
    public $details;
    public $helpers;
    public $auth;
    public $actions;
    public $triggers;

    public function is_active(){
        return defined( 'BLC_PLUGIN_FILE' );
    }

    public function get_details(){
        $integration_url = plugin_dir_url( __FILE__ );

        return array(
            'name' => 'Broken Link Checker',
            'icon' => $integration_url . '/assets/img/icon-broken-link-checker.png',
        );
    }

}
