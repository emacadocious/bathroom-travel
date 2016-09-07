

  <?php $template_dir = get_bloginfo('template_directory'); ?>
<!-- Carousel
 ================================================== -->
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner" role="listbox">
     <div class="item active">
       <img class="first-slide" src="<?php echo $template_dir . '/assets/images/IMG_0618.png' ?>" alt="First slide">
       <div class="container">
         <div class="carousel-caption">
           <h1>Example headline.</h1>
           <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
           <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
         </div>
       </div>
     </div>
     <div class="item">
       <img class="second-slide" src="<?php echo $template_dir . '/assets/images/IMG_0851.png' ?>" alt="Second slide">
       <div class="container">
         <div class="carousel-caption">
           <h1>Another example headline.</h1>
           <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
         </div>
       </div>
     </div>
     <div class="item">
       <img class="third-slide" src="<?php echo $template_dir . '/assets/images/IMG_0957.png' ?>" alt="Third slide">
       <div class="container">
         <div class="carousel-caption">
           <h1>One more for good measure.</h1>
           <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
           <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
         </div>
       </div>
     </div>
   </div>
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div><!-- /.carousel -->

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

<script>
jQuery(function(){
  jQuery('#myCarousel').carousel();
});
</script>
