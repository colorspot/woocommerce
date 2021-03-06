<?php
/**
 * WooCommerce Account Settings.
 *
 * @package WooCommerce/Admin
 */

defined( 'ABSPATH' ) || exit;

if ( class_exists( 'WC_Settings_Accounts', false ) ) {
	return new WC_Settings_Accounts();
}

/**
 * WC_Settings_Accounts.
 */
class WC_Settings_Accounts extends WC_Settings_Page {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->id    = 'account';
		$this->label = __( 'Accounts &amp; Privacy', 'woocommerce' );
		parent::__construct();
	}

	/**
	 * Get settings array.
	 *
	 * @return array
	 */
	public function get_settings() {
		$settings = apply_filters(
			'woocommerce_' . $this->id . '_settings', array(
				array(
					'title' => '',
					'type'  => 'title',
					'id'    => 'account_registration_options',
				),

				array(
					'title'         => __( 'Guest checkout', 'woocommerce' ),
					'desc'          => __( 'Allow customers to place orders without an account.', 'woocommerce' ),
					'id'            => 'woocommerce_enable_guest_checkout',
					'default'       => 'yes',
					'type'          => 'checkbox',
					'checkboxgroup' => 'start',
					'autoload'      => false,
				),

				array(
					'title'         => __( 'Login', 'woocommerce' ),
					'desc'          => __( 'Allow customers to log into an existing account during checkout', 'woocommerce' ),
					'id'            => 'woocommerce_enable_checkout_login_reminder',
					'default'       => 'yes',
					'type'          => 'checkbox',
					'checkboxgroup' => 'end',
					'autoload'      => false,
				),

				array(
					'title'         => __( 'Account creation', 'woocommerce' ),
					'desc'          => __( 'Allow customers to create an account during checkout.', 'woocommerce' ),
					'id'            => 'woocommerce_enable_signup_and_login_from_checkout',
					'default'       => 'yes',
					'type'          => 'checkbox',
					'checkboxgroup' => 'start',
					'autoload'      => false,
				),

				array(
					'desc'          => __( 'Allow customers to create an account on the "My account" page.', 'woocommerce' ),
					'id'            => 'woocommerce_enable_myaccount_registration',
					'default'       => 'no',
					'type'          => 'checkbox',
					'checkboxgroup' => '',
					'autoload'      => false,
				),

				array(
					'desc'          => __( 'When creating an account, automatically generate a username from the customer\'s email address.', 'woocommerce' ),
					'id'            => 'woocommerce_registration_generate_username',
					'default'       => 'yes',
					'type'          => 'checkbox',
					'checkboxgroup' => '',
					'autoload'      => false,
				),

				array(
					'desc'          => __( 'When creating an account, automatically generate an account password.', 'woocommerce' ),
					'id'            => 'woocommerce_registration_generate_password',
					'default'       => 'no',
					'type'          => 'checkbox',
					'checkboxgroup' => 'end',
					'autoload'      => false,
				),

				array(
					'type' => 'sectionend',
					'id'   => 'account_registration_options',
				),

			)
		);

		return apply_filters( 'woocommerce_get_settings_' . $this->id, $settings );
	}
}

return new WC_Settings_Accounts();
