
<?php
if (select2-billing_persontype-container)
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
  $states['BR'] = array(
    'MG' => __( 'Minas Gerais', 'woocommerce' ),
  );
  return $states;
}


