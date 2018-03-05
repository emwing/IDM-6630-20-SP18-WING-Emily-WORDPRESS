<!--  <?php echo basename(__FILE__); ?> -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?> <!-- always put this at the end of the head section -->
  </head>
  <body>
    <header>
      <h1><?php echo get_bloginfo('name'); ?></h1>
      <h2>wheeeeeeeeeeeeeeeeeeee!</h2>
      <?php get_template_part("nav"); ?>
    </header>
    <!--  <?php echo "END OF " . basename(__FILE__); ?> -->
