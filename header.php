<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>siteOne</title>

   <?php wp_head(); ?>

</head>

<body>

   <div class="slider">
      <?php if ( $slider1 = get_field( 'slider1' ) ): ?>
      <?php echo $slider1; ?>
      <?php endif; ?>
   </div>

   <div class="menuLogo">
            <?php $args = array(
                        'post_type'      => 'menu_logo',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
            <div class="menu_logo">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>
                           
               <div class="logo">
                   <?php if ( has_post_thumbnail() ) : ?>
                     <div title="<?php the_title_attribute(); ?>" class="logo1">
                        <?php the_post_thumbnail( '30px' ); ?>
                     </div>
                  <?php endif; ?>
               <div class="logo_info">
                     <div class="logo_info-title"> <?php the_title(); ?></div>
               </div>
                </div>      
                    <?php endwhile;?>
            </div>
                    <?php endif;
                    wp_reset_query();?>    
              
   </div>
   
   <nav class="menu">
      <ul class="menu__list">
         <?php wp_nav_menu( array(
             'theme_location' => 'primary',
             'menu_class'     => 'menu__list',
             'add_li_class'  => 'menu__list-item'
         ) ); ?>
      </ul>
   </nav>
   <div class="fotoOnSlide">
      <?php $args = array(
            'post_type'      => 'foto_on_slider',
            'order'          => 'DESC',
            'orderby'        => 'date',
            'posts_per_page' => -1,
             );
      $the_query = new WP_Query($args);
         if ( $the_query->have_posts()):?>
   <div class="foto_on_slider">
         <?php while ( $the_query->have_posts()):?>  
         <?php $the_query->the_post();?>                       
      <div class="foto">
         <?php if ( has_post_thumbnail() ) : ?>
         <div title="<?php the_title_attribute(); ?>" class="foto1">
         <?php the_post_thumbnail( 'large' ); ?>
      </div>
         <?php endif; ?>
   </div>      
         <?php endwhile;?>
   </div>
         <?php endif;
            wp_reset_query();?>    
   </div>