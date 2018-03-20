<!--  <?php echo basename(__FILE__); ?> -->
<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?> >

      <h3>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h3>

      <?php the_content(); ?>

      <p>Genres: <?php the_category( ', ' ); ?></p>

    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</main>
<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
