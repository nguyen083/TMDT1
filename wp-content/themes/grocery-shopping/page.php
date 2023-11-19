<?php get_header(); ?>

<div id="content">
  <div class="container">
    <?php $grocery_shopping_theme_layout = get_theme_mod( 'grocery_shopping_page_layout','Right Sidebar');
            if($grocery_shopping_theme_layout == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page'); 
                endwhile; ?>
        <?php }else if($grocery_shopping_theme_layout == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="grocery-shopping-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php }else if($grocery_shopping_theme_layout == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-8 col-md-8">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="grocery-shopping-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
               <div class="col-lg-8 col-md-8">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="grocery-shopping-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                      ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php } ?>
  </div>
</div>

<?php get_footer(); ?>