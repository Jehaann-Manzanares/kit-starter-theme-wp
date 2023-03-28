<?php /*
@package packageName
@subpackage packageName
@since 1.0
*/

?>
<h1>index page</h1>
<?php get_header(); ?>
      <?php
        $options = get_theme_mod('code_settings');
        if ( !empty($options['banner']) ) {
          $banner = $options['banner'];
        }else {
          $banner = themepath . 'slide1.jpg';
        }

       ?>
      <!-- Slider -->
      <section class="banner-principal">
        <div class="banner" style="background-image: url('<?php echo $banner; ?>');"></div>
        <div class="overlay-banner"></div>
        <div class="texto-banner">
          <?php if (is_category()): ?>

              <h3><?php _e('Categoria: ','slan');?> <?php single_cat_title(); ?></h3>

            <?php elseif (is_tag() ): ?>

              <h3><?php _e('Etiqueta: ','slan');?> <?php single_tag_title(); ?></h3>

            <?php elseif (is_search() ): ?>

              <h3><?php _e('Resultado de busqueda para: ','slan');?> <?php the_search_query(); ?></h3>

            <?php elseif (is_day() ): ?>

              <h3><?php _e('Archivo : ','slan');?> <?php the_time(get_option('date_format'));  ?></h3>

            <?php elseif (is_month() ): ?>

              <h3><?php _e('Archivo : ','slan');?> <?php the_time('F Y');  ?></h3>

            <?php elseif (is_year() ): ?>

              <h3><?php _e('Archivo : ','slan');?> <?php the_time('Y');  ?></h3>

            <?php elseif (is_author() ): ?>

              <h3><?php _e('articulos de : ','slan');?>
                <?php
                  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
                  <?php echo $curauth->display_name; ?>
              </h3>

            <?php elseif (is_404() ): ?>

              <h3><?php _e('No se encontro la pagina ','slan');?></h3>

            <?php elseif (is_tax() ): ?>
              <?php $term = get_term_by('slug',get_query_var('term'),get_query_var('taxonomy')); ?>
              <h3><?php echo $term->name;?></h3>

            <?php elseif (is_home() ): ?>
                <?php if (is_front_page()):?>

                    <h3><?php _e('Blog','slan');?></h3>
                    <?php else: ?>

                    <h3><?php wp_title(' ', true, 'right');?></h3>

                <?php endif; ?>
            <?php else:?>
                <h3><?php wp_title(' ', true, 'right');?></h3>
          <?php endif; ?>
        </div>
      </section> <!-- Slider -->

      <section class="blog">
        <div class="contenedor">

          <div class="listado-articulos">
                <?php if (have_posts() ): while (have_posts()): the_post();?>

                    <article <?php post_class ('article'); ?> id="post-<?php the_ID();?>">

                      <div class="article-header">
                        <p class="article-date"><?php the_time(get_option('date_format')); ?></p>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h2>
                      <p class="article-category"><a href="#"><?php the_category(','); ?></a></p>
                      </div><!-- /article-header -->

                      <?php if (! has_post_format('video') && ! has_post_format('audio')) : ?>

                          <?php if (has_post_thumbnail()):?>
                            <a href="<?php the_permalink(); ?>">
                              <?php  the_post_thumbnail('blog-size-image');?>
                            </a>
                          <?php endif; ?>

                      <?php endif; ?>
                      <div class="article-content">
                          <p><?php the_excerpt(); ?></p>
                          <p class="read-more-container"><a href="<?php the_permalink(); ?>" class="read-more-link"><?php _e('Leer más','slan') ?></a></p>
                      </div> <!-- /.article-content -->

                    </article>	<!-- /.article -->
                <?php endwhile; ?>
                  <?php if (get_next_posts_link() || get_previous_posts_link() ) :?>

                      <div class="navegacion-articulos">
                          <nav>
                            <div class="anterior">

                              <?php next_posts_link(__('<i class="fa fa-arrow-left" aria-hidden="true"></i> Artículos antiguos','slan')); ?>
                            </div>
                            <div class="siguiente">

                              <?php previous_posts_link(__('Artículos recientes <i class="fa fa-arrow-right" aria-hidden="true"></i>','slan')); ?>
                            </div>
                          </nav>
                      </div> <!-- /.navegacion-articulos -->
                    <?php endif; ?>
                 <?php else:?>

                  <?php get_template_part('template-parts/content','nopost'); ?>
                <?php endif; ?>


          </div>  <!-- /listado-articulos -->
            <?php get_sidebar(); ?>
        </div>
      </section> <!-- /Blog -->
<?php get_footer(); ?>
