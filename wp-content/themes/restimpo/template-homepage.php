<?php
/**
 * Template Name: Homepage
 * The template file for pages without the comments section.
 * @package RestImpo
 * @since RestImpo 1.1.5
*/
get_header(); ?>
<div id="wrapper-content">
    
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Es gibt keinen Frieden</h1>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
    <article id="content">
      <div class="entry-content">
        <?php 
            $post = get_post('36');
            setup_postdata($post);
         ?>
           <h2 class="entry-headline"><span class="entry-headline-text"><?php echo get_the_title('36'); ?></span></h2>
         <?php
            the_content();
        ?>
<?php //wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'restimpo' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php //edit_post_link( __( '(Edit)', 'restimpo' ), '<p class="edit-link">', '</p>' ); ?>
      </div>
      <div class="content-endline"></div>
    </article> <!-- end of content -->
  </div>
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Es gibt nur Leidenschaft</h1>
    </div>
  </div>
  <div class="header-image">
    <img class="header-img" src="wp-content/uploads/2015/01/background4_012.jpg" alt="Die Waechter Ziosts">
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Durch Leidenschaft erlange ich Stärke</h1>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
    <article id="content">
      <div class="entry-content">
        <?php 
            $post = get_post('39');
            setup_postdata($post);
         ?>
           <h2 class="entry-headline"><span class="entry-headline-text"><?php echo get_the_title('39'); ?></span></h2>
         <?php
            the_content();
        ?>
      </div>
      <div class="content-endline"></div>
    </article> <!-- end of content -->
  </div>
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Durch Stärke erlange ich Macht</h1>
    </div>
  </div>
  <div class="header-image">
    <img class="header-img" src="wp-content/uploads/2015/01/background3.jpg" alt="Die Waechter Ziosts">
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Durch Macht erlange ich den Sieg</h1>
    </div>
  </div>
  <div class="container">
  <div id="main-content">
    <article id="content">
      <div class="entry-content">
        <?php 
            $post = get_post('72');
            setup_postdata($post);
         ?>
           <h2 class="entry-headline"><span class="entry-headline-text"><?php echo get_the_title('72'); ?></span></h2>
         <?php
            the_content();
        ?>
      </div>
      <div class="content-endline"></div>
    </article> <!-- end of content -->
  </div>
  </div>
  <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Durch den Sieg zerbersten meine Ketten</h1>
    </div>
  </div>
  <div class="header-image">
    <img class="header-img" src="wp-content/uploads/2015/01/background6.jpg" alt="Die Waechter Ziosts">
  </div>
    <div class="header-description-wrapper">
    <div class="header-description">
      <h1>Die macht wird mich befreien</h1>
    </div>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>
