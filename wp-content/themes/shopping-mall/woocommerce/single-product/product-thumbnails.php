<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	?>
	<div class="product-thumbs-slider product-thumbs-without-action" style="overflow: hidden;">
		<?php
		foreach( $attachment_ids as $attachment_id )
		{
			$image_link = wp_get_attachment_thumb_url( $attachment_id );
			echo '<div>';
			echo wp_get_attachment_image( $attachment_id, '110x60');
			echo '</div>';
		}
		?>
	</div>
	<?php
}
