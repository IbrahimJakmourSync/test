<?php 
	global $product;
	
	
	do_action( 'woocommerce_before_shop_loop_item' ); 
?>
	
<div class="product-element-top">
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="product-image-link">
		<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woodmart_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );
		?>
	</a>
	<?php woodmart_hover_image(); ?>

	<div class="top-information">
		<?php
			/**
			 * woocommerce_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );
		?>
		<?php
			woodmart_product_categories();
			woodmart_product_brands_links();
		?>
	</div>
	<div class="bottom-information">
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		<?php 
			echo woodmart_swatches_list();
		?>
	</div> 
	<div class="woodmart-buttons">
		<div class="woodmart-add-btn">
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
		</div>
		<?php woodmart_compare_btn(); ?>
		<?php woodmart_quick_view_btn( get_the_ID() ); ?>
		<?php do_action( 'woodmart_product_action_buttons' ); ?>
	</div>
	<?php woodmart_quick_shop_wrapper(); ?>
</div>
