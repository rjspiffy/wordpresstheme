<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <!-- Logo Section -->
  <div class="logo">
    <!-- Replace with your logo image once ready -->
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-placeholder.png" alt="Logo">
    </a>
  </div>

  <!-- Navigation Menu Section -->
  <nav class="site-navigation">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',  // Menu location
        'container' => false,            // Don't wrap the menu in a container
        'menu_class' => 'nav-menu'       // Add a class for styling
      ));
    ?>
  </nav>
</header>

<?php wp_footer(); ?>

</body>
</html>
