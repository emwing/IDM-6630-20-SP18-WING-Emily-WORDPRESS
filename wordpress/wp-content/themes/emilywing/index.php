<!--  <?php echo basename(__FILE__); ?> -->

<?php define( 'WP_USE_THEMES', false ); get_header(); ?> <!-- use this instead of get_header() because of custom theme -->

<?php get_template_part("main"); ?> <!-- "The Loop" code in this file -->

<?php get_footer(); ?>

<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
