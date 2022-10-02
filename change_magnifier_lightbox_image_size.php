function change_magnifier_lightbox_image_size(){
  echo "De post" , $post;

  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  echo "De ID ", $post_thumbnail_id;
  $filemeta = wp_get_attachment_metadata( $post_thumbnail_id, FALSE );
  echo "De filemeta ", $filemeta;

    if ($filemeta['width']>3071 || $filemeta['height']>3071){
      $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'preview' ) );
    }else{
      $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'large' ) );
    };
};
apply_filters( 'woocommerce_product_thumbnails_large_size', 'change_magnifier_lightbox_image_size' );
