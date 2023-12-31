<?php
defined( 'ABSPATH' ) || exit;

/**
 * Compatibility with plugin: Oxygen (by Soflyy).
 */
class FluidCheckout_Oxygen extends FluidCheckout {

	/**
	 * __construct function.
	 */
	public function __construct() {
		$this->hooks();
	}



	/**
	 * Initialize hooks.
	 */
	public function hooks() {
		// Late hooks
		add_action( 'init', array( $this, 'late_hooks' ), 100 );
	}

	/**
	 * Add or remove late hooks.
	 */
	public function late_hooks() {
		// Maybe remove checkout page template
		// - when editing the checkout page
		// - when using theme header and footer
		if ( isset( $_GET[ 'ct_builder' ] ) || isset( $_GET[ 'action' ] ) || ! FluidCheckout_CheckoutPageTemplate::instance()->is_distraction_free_header_footer_checkout() ) {
			remove_filter( 'template_include', array( FluidCheckout_CheckoutPageTemplate::instance(), 'checkout_page_template' ), 100 );
		}
	}

}

FluidCheckout_Oxygen::instance();
