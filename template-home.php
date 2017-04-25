<?php /* template name: Home */ ?>
<?php get_header() ?>
  <div class="wrapper-content">
    <?php get_template_part('parts/content','publicidade') ?>

    <div class="container-fluid">
      <div class="conteudo-home">
        <div class="row">
          <?php
          $argAgenciaHome = array(
            'post_type' => 'agencia',
            'meta_key'		=> 'destaque_home',
    	       'meta_value'	=> '1'
          );
          $agenciasHome = new wp_query($argAgenciaHome);
          if($agenciasHome->have_posts()):
            while($agenciasHome->have_posts()): $agenciasHome->the_post();
              ?>
              <div class="col-md-12 box-agencia-home">
                <div class="">
                  <div class="row">
                    <div class="col-md-2">
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                    </div>
                    <div class="col-md-10">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="desc-agencia">
                            <p class="cidade-agencia"> <?php echo get_field('cidade');   ?> </p>
                            <h3> <?php the_title(); ?> </h3>
                            <?php echo get_field('endereco'); ?> - <?php echo get_field('num'); ?> - <?php echo get_field('cidade'); ?>/<?php echo get_field('uf'); ?>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <a href="<?php the_permalink() ?>" class="btn btn-success btn-informacoes">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Informações
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            endwhile;
          else:
            echo "Nenhuma agencia encontrada";
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>
