<div class="logo">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php bloginfo() ?>" class="img-responsive">
  </a>
</div>

<div class="menu-lateral">
  <?php
    $args = array(
      'theme_location' => 'menu_topo',
      'menu_class' => 'nav navbar-nav menu-site',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'	 => new wp_bootstrap_navwalker()
    );
    wp_nav_menu( $args );
  ?>

  <div class="clearfix"></div>
  <div class="pesquisa">
    <?php get_search_form() ?>
  </div>

  <div class="clearfix"></div>
  <div class="social">
    <a href="" target="_blank">
      <i class="fa fa-facebook-official" aria-hidden="true"></i>
    </a>
    <a href="" target="_blank">
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </a>
  </div>
  <div class="endereco">
    Rua etc e tals 1308/1318 <br>
    Savassi <br>
    Belo Horizonte | MG
  </div>
</div>
