<?php

add_action( 'wp_enqueue_scripts', 'enfold_child_enqueue_styles' );

function enfold_child_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action('wp_head', 'add_custom_fonts');
function add_custom_fonts(){

?>
<style type="text/css">
@font-face {
    font-family: 'rounded_eleganceregular';
    src: url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/RoundedElegance-Regular/​rounded_elegance-webfont.woff2') format('woff2'),
         url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/RoundedElegance-Regular/rounded_elegance-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
  font-family: 'Aileron-Regular';
  src:
	url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/font/Aileron-Regular/Aileron-Regular.eot?#iefix') format('embedded-opentype'),
	url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/font/Aileron-Regular/Aileron-Regular.otf')  format('opentype'),
	url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/font/Aileron-Regular/Aileron-Regular.woff') format('woff'),
	url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/font/Aileron-Regular/Aileron-Regular.ttf')  format('truetype'),
	url('<?php echo site_url(); ?>/wp-content/themes/thegem-child/font/Aileron-Regular/Aileron-Regular.svg#Aileron-Regular') format('svg');
  font-weight: normal;
  font-style: normal;
}
</style>
<?php
}

function _remove_script_version( $src ){
  $parts = explode( '?ver', $src );
  return $parts[0];
  }
  add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
  add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


