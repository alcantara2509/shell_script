
<?php
//if (3 === $person_type)
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
function custom_woocommerce_states( $states ) {
  $states['BR'] = array(
    'MG' => __( 'Minas Gerais', 'woocommerce' ),
  );
  return $states;
}


