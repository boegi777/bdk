<?php
/**
 * Template Name: Homepage
 * The template file for pages without the comments section.
 * @package RestImpo
 * @since RestImpo 1.1.5
*/
get_header(); ?>
<div id="wrapper-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Es gibt keinen Frieden ...</h1>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
    <article id="content">
      <div class="post-thumbnail"><?php restimpo_get_display_image_page(); ?></div> 
      <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'restimpo' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php //edit_post_link( __( '(Edit)', 'restimpo' ), '<p class="edit-link">', '</p>' ); ?>
      </div>
    </article> <!-- end of content -->
  </div>
  </div>
  <div class="header-description-wrapper">
    <div class="header-description-2">
      <h1>... Es gibt nur Leidenschaft</h1>
    </div>
  </div>
  <div class="header-image">
    <img class="header-img" src="http://localhost/bdk/wp-content/uploads/2015/01/background4_012.jpg" alt="Die Waechter Ziosts">
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Durch Leidenschaft erlange ich Stärke</h1>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
    <article id="content">
      <div class="post-thumbnail"><?php restimpo_get_display_image_page(); ?></div> 
      <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'restimpo' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php //edit_post_link( __( '(Edit)', 'restimpo' ), '<p class="edit-link">', '</p>' ); ?>
      </div>
    </article> <!-- end of content -->
  </div>
  </div>
<?php endwhile; endif; ?>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>