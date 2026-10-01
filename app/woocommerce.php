<?php
/**
 * WooCommerce integration.
 */

defined( 'ABSPATH' ) || exit;


/**
 * Remove WooCommerce default wrappers.
 */
function websiteni_woocommerce_remove_default_wrappers() {

	remove_action(
		'woocommerce_before_main_content',
		'woocommerce_output_content_wrapper',
		10
	);

	remove_action(
		'woocommerce_after_main_content',
		'woocommerce_output_content_wrapper_end',
		10
	);
}

add_action(
	'wp',
	'websiteni_woocommerce_remove_default_wrappers'
);


/**
 * Add WebsiteNI wrappers around WooCommerce content.
 */
function websiteni_woocommerce_wrapper_start() {
	?>
	<main id="content" class="page-content woocommerce-content">
		<div class="grid-container">
	<?php
}

add_action(
	'woocommerce_before_main_content',
	'websiteni_woocommerce_wrapper_start',
	10
);


/**
 * Close WebsiteNI wrappers.
 */
function websiteni_woocommerce_wrapper_end() {
	?>
		</div>
	</main>
	<?php
}

add_action(
	'woocommerce_after_main_content',
	'websiteni_woocommerce_wrapper_end',
	10
);