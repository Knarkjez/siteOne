<?php
/*
TempLate Name: home

*/
?>

<?php get_header(); ?>

<div class="whyUseAppkit">
            <?php $args = array(
                        'post_type'      => 'why_use_appkit',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
            <div class="why_use_appkit">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>
                           
               <div class="why_use">
                     <div class="why_use-title"> <?php the_title(); ?></div>
                     <div class="why_use-text"> 
                        <?php if ( $why_use_appkit = get_field( 'why_use_appkit' ) ): ?>
                        <?php echo $why_use_appkit; ?>
                        <?php endif; ?>
                     </div>
                  </div>
            </div>      
                    <?php endwhile;?>
         </div>
                    <?php endif;
                    wp_reset_query();?>                 
</div>
        
<div class="technologiesList">
            <?php $args = array(
                        'post_type'      => 'technologieslist',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
            <div class="technologies_list">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>
                           
               <div class="technologies_logo">
                   <?php if ( has_post_thumbnail() ) : ?>
                     <div title="<?php the_title_attribute(); ?>" class="technologies_list-logo">
                        <?php the_post_thumbnail( '30px' ); ?>
                     </div>
                  <?php endif; ?>
               </div>      
                    <?php endwhile;?>
            </div>
                    <?php endif;
                    wp_reset_query();?>          
   </div>

   <div class="Developmets">
            <?php $args = array(
                        'post_type'      => 'developmets',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
                        <div class="developmets-block">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>
                           
               <div class="lets__developmets">
                   <?php if ( has_post_thumbnail() ) : ?>
                     <div title="<?php the_title_attribute(); ?>" class="developmets__img">
                        <?php the_post_thumbnail( 'large' ); ?>
               </div>
               <?php endif; ?>
               <div class="developmets__info">
                     <div class="developmets-title"> <?php the_title(); ?></div>
                     <div class="developmets-text"> 
                        <?php if ( $developmets = get_field( 'developmets' ) ): ?>
                        <?php echo $developmets; ?>
                        <?php endif; ?>
                     </div>
                  </div>
            </div>      
                    <?php endwhile;?>
         </div>
                    <?php endif;
                    wp_reset_query();?>    
              
               </div>
            </div>
         </div>
   <div class="background_customers">
         <div class="block_customers">
            <?php $args = array(
                        'post_type'      => 'customers',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
            <div class="customers">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>          
               <div class="customers-text">
                     <div class="customers-title"> <?php the_title(); ?></div>
               </div>
            </div>      
                    <?php endwhile;?>
         </div>
                    <?php endif;
                    wp_reset_query();?>                 
<div class="customersMessages">
            <?php $args = array(
                        'post_type'      => 'customersMessages',
                        'order'          => 'DESC',
                        'orderby'        => 'date',
                        'posts_per_page' => -1,
                    );
               $the_query = new WP_Query($args);
                    if ( $the_query->have_posts()):?>
                        <div class="block_customers-messages">
                    <?php while ( $the_query->have_posts()):?>  
                        <?php $the_query->the_post();?>
                           
               <div class="block_customers-images">
                   <?php if ( has_post_thumbnail() ) : ?>
                     <div title="<?php the_title_attribute(); ?>" class="customers-images">
                        <?php the_post_thumbnail( 'large' ); ?>
               </div>
               <?php endif; ?>
               <div class="block_customers-info">
                     <div class="block_customers-title"> <?php the_title(); ?></div>
                     <div class="block_customers-text"> 
                        <?php if ( $customersmessages = get_field( 'customersmessages' ) ): ?>
                        <?php echo $customersmessages; ?>
                        <?php endif; ?>
                     </div>
                  </div>
            </div>      
                    <?php endwhile;?>
         </div>
                    <?php endif;
                    wp_reset_query();?>    
              
               </div>
            </div>
         </div>
</div>
<?php get_footer(); ?>