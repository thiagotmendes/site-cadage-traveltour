<?php /* template name: Agencias */ ?>
<?php get_header() ?>
  <div class="wrapper-content">
    <div class="container-fluid">
      <h1> Resultado de pesquisa </h1>
      <div class="well well-sm">
        <div class="form-group">
          <label for="filtro"> Filtrar por: </label>
          <input type="text" class="form-control input-pesquisa" alt="lista-clientes" id="" placeholder="">
        </div>
      </div>
      <?php
        $argAgencias = array(
          'post_type' => 'agencia',
          'posts_per_page' => -1
        );

        $agenciaSite = new wp_query($argAgencias);

        if ($agenciaSite->have_posts()):
          echo "<div class='row filtra'>";
          while($agenciaSite->have_posts()): $agenciaSite->the_post();
            ?>
            <div class="col-md-6 lista-clientes">
              <div class="box-agencia-home">
                <div class="row">
                  <div class="col-md-4">
                    <div class="img-agencia">
                      <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="desc-agencia">
                      <p class="cidade-agencia"> <?php echo get_field('cidade');   ?> </p>
                      <h3> <?php the_title(); ?> </h3>
                      <?php if (get_field('endereco')): ?>
                        <?php echo get_field('endereco'); ?> -
                        <?php echo get_field('num'); ?> -
                        <?php echo get_field('cidade'); ?>/<?php echo get_field('uf'); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          endwhile;
          echo "</div>";
        else:
          echo "Nenhuma agência encontrada";
        endif;
      ?>
    </div>
  </div>
<?php get_footer() ?>
