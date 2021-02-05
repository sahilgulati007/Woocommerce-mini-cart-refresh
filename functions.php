<?php

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <span class="bacsket-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
        $fragments['span.bacsket-count'] = ob_get_clean();
    return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart');
function wc_refresh_mini_cart($fragments){
    ob_start();
    ?>
    <div id="ql_woo_cart">
        <?php woocommerce_mini_cart(); ?>
    </div>
    <?php
        $fragments['#ql_woo_cart'] = ob_get_clean();
    return $fragments;
}
