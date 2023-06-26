<?php

namespace WPForms\Admin\Payments\Views\Overview;

use WPForms\Db\Payments\ValueValidator;

/**
 * Helper methods for the Overview page.
 *
 * @since 1.8.2
 */
class Helpers {

	/**
	 * Get subscription description.
	 *
	 * @since 1.8.2
	 *
	 * @param string $payment_id Payment id.
	 * @param string $amount     Payment amount.
	 *
	 * @return string
	 */
	public static function get_subscription_description( $payment_id, $amount ) {

		// Get the subscription period for the payment.
		$period    = wpforms()->get( 'payment_meta' )->get_single( $payment_id, 'subscription_period' );
		$intervals = ValueValidator::get_allowed_subscription_intervals();

		// If the subscription period is not set or not allowed, return the amount only.
		if ( ! isset( $intervals[ $period ] ) ) {
			return $amount;
		}

		// Use "/" as a separator between the amount and the subscription period.
		return $amount . ' / ' . $intervals[ $period ];
	}

	/**
	 * Return a placeholder text "N/A" when there is no actual data to display.
	 *
	 * @since 1.8.2
	 *
	 * @param string $with_wrapper Wrap the text within a span tag for styling purposes. Default: true.
	 *
	 * @return string
	 */
	public static function get_placeholder_na_text( $with_wrapper = true ) {

		$text = __( 'N/A', 'wpforms-lite' );

		// Check if the text should be wrapped within a span tag.
		if ( $with_wrapper ) {
			return sprintf( '<span class="payment-placeholder-text-none">%s</span>', $text );
		}

		return $text;
	}
}
