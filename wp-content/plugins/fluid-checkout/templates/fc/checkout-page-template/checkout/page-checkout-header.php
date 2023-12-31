<?php
/**
 * The header for the checkout page.
 *
  * This template can be overridden by copying it to yourtheme/woocommerce/checkout/page-checkout-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package fluid-checkout
 * @version 3.0.3
 */

defined( 'ABSPATH' ) || exit;

// Custom attribute handling.
$custom_attributes_esc = '';
$custom_attributes = apply_filters( 'fc_checkout_body_custom_attributes', array() );
if ( is_array( $custom_attributes ) ) {
    foreach ( $custom_attributes as $attribute => $attribute_value ) {
        $custom_attributes_esc .= ' ' . esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

<?php if ( isset( $meta_theme_color ) ) : ?>
    <meta name="theme-color" content="<?php echo esc_attr( $meta_theme_color ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php echo $custom_attributes_esc; // WPCS: XSS ok. ?>>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fluid-checkout' ); ?></a>

<?php do_action( 'fc_checkout_header' ); ?>

<main id="main" class="content-area fc-main">
