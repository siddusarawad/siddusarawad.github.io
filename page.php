<?php 
/**
 * The Default Page Template for SKT Ele Icecream Lite
 *
 * Displays the Pages.
 *
 * @package SKT Ele Icecream Lite
 * 
 * @since SKT Ele Icecream Lite 1.0
 */
global $complete;?>
<?php get_header(); ?>
    <div class="page_wrap layer_wrapper">
    	<?php if (!is_home() && !is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
			<?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>
        <div id="content">
            <div class="center">
                <div class="single_wrap">
                    <div class="single_post">
                        <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                                    
                        <!--EDIT BUTTON START-->
                            <?php if ( is_user_logged_in() || is_admin() ) { ?>
                                    <div class="edit_wrap">
                            			<a href="<?php echo get_edit_post_link(); ?>">
                            				<?php _e('Edit','complete'); ?>
                                		</a>
                            		</div>
                            <?php } ?>
                        <!--EDIT BUTTON END-->
                        
                        <!--PAGE CONTENT START-->   
                        <div class="single_post_content">
                        
                                <!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                    	<h1 class="page-title"><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </div>
                                        <div style="clear:both"></div>
                                    <div class="thn_post_wrap wp_link_pages">
                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                    </div>
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END--> 
                        </div>
                   <?php endwhile ?> 
                    </div>
                  <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     
                  <?php if (!empty ($complete['post_comments_id'])) { ?>
                      <div class="comments_template">
                          <?php comments_template('',true); ?>
                      </div>
                  <?php }?> 
                  <!--COMMENT END-->
                  
                  <?php endif ?>
                    </div>
                <!--PAGE END-->
                <!--SIDEBAR START--> 
                <?php get_sidebar('page'); ?>
                <!--SIDEBAR END-->
                    </div>
            </div>
    </div><!--layer_wrapper class END-->
<?php get_footer(); ?>