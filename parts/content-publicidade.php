<div class="container-fluid publicidade">
  <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
      <div class="banner">
        <?php get_template_part('parts/content', "banner") ?>
      </div>
    <?php endwhile ?>
  <?php endif; ?>
  <?php wp_reset_query() ?>
</div>
