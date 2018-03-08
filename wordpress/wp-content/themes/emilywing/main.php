<!--  <?php echo basename(__FILE__); ?> -->
<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- if there are posts, while there are still posts to show, run the_post function -->

    <!-- now tell wordpress to do something if posts exist -->
    <div class="postBody">
      <!-- < php echo $post->post_title; > manuallly grab wordpress variable $post, which is an object, then use -> to access key info -->
      <?php the_title('<h2>','</h2>'); ?>
      <?php the_content(); ?>
    </div>

  <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</main>
<!--  <?php echo "END OF " . basename(__FILE__); ?> -->
