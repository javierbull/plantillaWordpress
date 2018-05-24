<?php
/**
  * Crear nuestros menus gestionables desde el
  * administrador de Wordpress
*/
function mis_menus(){
  register_nav_menus(
    array(
      'navegation' => __('Menu de navegación'),
    )
  );
}
add_action('init', 'mis_menus');
?>
