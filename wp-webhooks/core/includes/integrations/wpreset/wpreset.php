<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * WP_Webhooks_Integrations_wpreset Class
 *
 * This class integrates all Contact Form 7 related features and endpoints
 *
 * @since 4.2.0
 */
class WP_Webhooks_Integrations_wpreset {

    // PHP 8.2 compatibility requires the declaration of all properties
    public $details;
    public $helpers;
    public $auth;
    public $actions;
    public $triggers;

    public function is_active(){

        $is_active = class_exists( 'WP_Reset' );

        //Backwards compatibility
        if( class_exists( 'WP_Webhooks_WP_Reset_Integration' ) ){
            $is_active = false;
            add_action( 'admin_notices', array( $this, 'throw_admin_notices' ), 100 );
        }

        return $is_active;
    }

    public function get_details(){
        $integration_url = plugin_dir_url( __FILE__ );

        return array(
            'name' => 'WP Reset',
            'icon' => $integration_url . '/assets/img/icon-wpreset.png',
        );
    }

    public function throw_admin_notices(){

        if( current_user_can( 'manage_options' ) ){
            $details = $this->get_details();
            echo sprintf(WPWHPRO()->helpers->create_admin_notice( 'To take full advantage of the <strong>%2$s %1$s</strong> integration, please deactivate it as we merged it into the core plugin of <strong>%2$s</strong>.', 'warning', false ), $details['name'], WPWHPRO()->settings->get_page_title() );
        }

	}

}
