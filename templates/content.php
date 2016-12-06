<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 item">
 <article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <figure class="article-preview-image">
          <?php the_post_thumbnail('large'); ?>
        </figure>
      </a>
    <?php endif; ?>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
 </article>
</div>
