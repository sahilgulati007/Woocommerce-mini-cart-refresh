                <div class="basket-block position-relative">
	            		<a href="<?php echo wc_get_cart_url(); ?>">
	            		<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/02/shopping-basket.svg" alt="Impruvit Shopping Basket Icon" class="img-fluid" />
	            		<span class="bacsket-count"><?php global $woocommerce; echo $woocommerce->cart->cart_contents_count; ?></span></a>
	            		<div id="ql_woo_cart"><?php woocommerce_mini_cart(); ?></div>
	            	</div>
