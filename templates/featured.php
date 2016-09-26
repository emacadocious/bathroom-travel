<?php $template_dir = get_bloginfo('template_directory'); ?>

<div class="row">
  <div id=”myCarousel” class=”carousel slide visible-lg”>
    <ol class=”carousel-indicators”>
      <li data-target=”#myCarousel” data-slide-to=”0″ class=””></li>
      <li class=”active” data-target=”#myCarousel” data-slide-to=”1″></li>
      <li class=”” data-target=”#myCarousel” data-slide-to=”2″></li>
    </ol>

    <div class=”carousel-inner”>
      <?php
        $i=1;
        $the_query = new WP_Query(array(
          ‘category_name’ => main,
          ‘posts_per_page’ => 3
        ));
        while ( $the_query->have_posts() ) :
          $the_query->the_post();
          if($i === 1){  ?>         
            <div class=”item active”>
              <?php the_post_thumbnail(‘full’);?>
              <div class=”carousel-caption”>
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
                <a class=”btn btn-success big” href=”http://www.binarynote.com”>Getting Started with Binarynote</a>
              </div>
            </div><!-- item active -->
            <?php }
            else { ?>
              <div class=”item”>
                <?php the_post_thumbnail(‘full’);?>
                <div class=”carousel-caption”>
                  <h2><?php the_title();?></h2>
                  <p><?php the_content();?></p>
                  <a class=”btn btn-success btn-lg” href=”http://www.binarynote.com”>Getting Started with Binarynote</a>
                </div>
              </div><!-- item -->
              <?php }
                $i++; endwhile;
                wp_reset_postdata();
              ?>
            </div><!-- carousel-inner -->
            <a class=”left carousel-control” href=”#myCarousel” data-slide=”prev”>
            <i class=”fa fa-angle-left fa-2x”></i></a>
            <a class=”right carousel-control” href=”#myCarousel” data-slide=”next”>
            <i class=”fa fa-angle-right fa-2x”></i></a>
          </div><!-- my-carousel -->
        </div>
