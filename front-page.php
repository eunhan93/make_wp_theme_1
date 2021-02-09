<?php get_header();?>
  
    
      <section class="mainSlide">
        <?php echo do_shortcode('[metaslider id="84"]'); ?>
      </section>
      <section class="content content1">
        <div class="content1-1">
          <h1>Project Title</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus unde cupiditate, inventore, blanditiis quidem modi fuga reiciendis laboriosam itaque accusamus error tenetur! Facilis labore enim nostrum. Recusandae, officiis eius.</p>
        </div>
        <div class="content1-2">
          <img src="http://localhost/wordpress/wp-content/uploads/2021/02/mountains-5842346_640.jpg" alt="image">

        </div>
      
      </section>
      <section class="content content2">
        <div class="content2-1">
          <h1>Project Date</h1>
          <p>2018</p>
        </div>
        <div class="content2-2">
          <h1>The Challenge</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et temporibus sunt consequatur aperiam? Doloremque quo ipsam repellat consequuntur? Adipisci eligendi doloremque blanditiis officiis tenetur eum, doloribus odit illum impedit ab!</p>
        </div>
      </section>
      <section class="photos ">
        <?php 
          $query = new WP_Query( array ( 
            'category_name' => 'mainImage',  // 카테고리 구분
            'posts_per_page' => 3 // 글 갯수 제한
            )  );
          if ( $query && $query->have_posts() ) :
          while( $query->have_posts() ) : $query->the_post();

          if( has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('custom'); ?>
          </a>
          <?php
          endif;
          endwhile;
          wp_reset_postdata();
          endif;

        ?>
      </section>
    
  
<?php get_footer();?>





<!-- if(have_posts()) : 
  while(have_posts()) : the_post(); 
  if( has_post_thumbnail()) :
    the_post_thumbnail('custom');
  endif;

  endwhile;
endif; -->

