<?php get_header(); ?>
<div class="image-grid">
    <?php
    $images = get_posts([
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'numberposts' => 6,
        'post_status' => 'inherit',
    ]);
    foreach ($images as $image) {
        $thumbnail = wp_get_attachment_image_src($image->ID, 'large')[0];
        $full = wp_get_attachment_url($image->ID);
        echo '<img src="' . esc_url($thumbnail) . '" data-full="' . esc_url($full) . '" alt="' . esc_attr($image->post_title) . '">';
    }
    ?>
</div>
<div class="lightbox" id="lightbox">
    <img src="" alt="Full-size photo">
</div>
<?php get_footer(); ?>