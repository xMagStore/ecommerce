<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php global $product;?>
<?php                             
    if ( post_password_required() ) {
        echo '<div class="rh-container"><div class="rh-content-wrap clearfix"><div class="main-side clearfix full_width" id="content"><div class="post text-center">';
            echo get_the_password_form();
        echo '</div></div></div></div>';
        return;
    }
?>
<!-- CONTENT -->
<div class="rh-container"> 
    <div class="rh-content-wrap clearfix">
        <!-- Main Side -->
        <div class="main-side page clearfix full_width woo_default_no_sidebar" id="content">
            <style scoped>.woocommerce div.product form.cart .group_table td{padding: 10px 5px}</style>
            <div class="post">
                <?php do_action( 'woocommerce_before_main_content' );?>
                <?php if(!rehub_option('rehub_disable_breadcrumbs')){woocommerce_breadcrumb();}?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        do_action( 'woocommerce_before_single_product' );
                    ?>
                    <div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="woo-image-part position-relative">
                            <?php
                                /**
                                 * woocommerce_before_single_product_summary hook.
                                 *
                                 * @hooked woocommerce_show_product_sale_flash - 10
                                 * @hooked woocommerce_show_product_images - 20
                                 */
                                do_action( 'woocommerce_before_single_product_summary' );
                            ?>
                            <?php do_action('rh_woo_after_single_image');?>
                        </div>

                        <div class="summary entry-summary">

                            <div class="re_wooinner_info mb20">
                                <?php echo re_badge_create('labelsmall'); ?>
                                <?php woocommerce_template_single_title();?>
                                <?php woocommerce_template_single_rating();?>
                                <?php do_action('rh_woo_single_product_title');?>
                                <div class="woo-button-actions-area mb15">
                                    <?php $wishlistadd = esc_html__('Add to wishlist', 'rehub-theme');?>
                                    <?php $wishlistadded = esc_html__('Added to wishlist', 'rehub-theme');?>
                                    <?php $wishlistremoved = esc_html__('Removed from wishlist', 'rehub-theme');?>
                                    <?php echo RH_get_wishlist($post->ID, $wishlistadd, $wishlistadded, $wishlistremoved);?>  
                                    <?php if(rehub_option('compare_page') || rehub_option('compare_multicats_textarea')) :?>           
                                        <?php 
                                            $cmp_btn_args = array(); 
                                            $cmp_btn_args['class']= 'rhwoosinglecompare';
                                            if(rehub_option('compare_woo_cats') != '') {
                                                $cmp_btn_args['woocats'] = esc_html(rehub_option('compare_woo_cats'));
                                            }
                                        ?>                                                  
                                        <?php echo wpsm_comparison_button($cmp_btn_args); ?> 
                                    <?php endif;?>
                                </div>
                                <?php echo wpsm_reviewbox(array('compact'=>1, 'id'=> $post->ID, 'scrollid'=>'tab-title-description'));?>                                 
                                <?php rh_show_vendor_info_single(); ?>
                                <?php rh_woo_code_zone('content');?>
                                <div class="mb20"><?php woocommerce_template_single_excerpt();?></div>
                                <?php do_action('rh_woo_single_product_description');?>
                                <?php
                                    /**
                                     * woocommerce_single_product_summary hook. was removed in theme and added as functions directly in layout
                                     *
                                     * @dehooked woocommerce_template_single_title - 5
                                     * @dehooked woocommerce_template_single_rating - 10
                                     * @dehooked woocommerce_template_single_price - 10
                                     * @dehooked woocommerce_template_single_excerpt - 20
                                     * @dehooked woocommerce_template_single_add_to_cart - 30
                                     * @dehooked woocommerce_template_single_meta - 40
                                     * @dehooked woocommerce_template_single_sharing - 50
                                     * @hooked WC_Structured_Data::generate_product_data() - 60
                                     */
                                    do_action( 'woocommerce_single_product_summary' );
                                ?>              
                                <div class="mb20"><?php woocommerce_template_single_meta();?></div>
                                <?php woocommerce_template_single_sharing();?>
                            </div>
                            <div class="re_wooinner_cta_wrapper mb20">
                                <div class="woo-price-area mb10"><?php woocommerce_template_single_price();?></div>
                                <?php do_action('rh_woo_single_product_price');?>
                                <div class="woo-button-area"><?php do_action('rhwoo_template_single_add_to_cart');?></div>
                                <?php rh_woo_code_zone('button');?> 
                            </div>              

                        </div><!-- .summary -->

                        <?php
                            /**
                             * woocommerce_after_single_product_summary hook.
                             *
                             * @hooked woocommerce_output_product_data_tabs - 10
                             * @hooked woocommerce_upsell_display - 15
                             * @hooked woocommerce_output_related_products - 20
                             */
                            do_action( 'woocommerce_after_single_product_summary' );
                        ?>

                        <?php woocommerce_output_product_data_tabs();?>

                        <!-- Related -->
                            <?php include(rh_locate_template( 'woocommerce/single-product/full-width-related-no-margin.php' ) ); ?>                        
                        <!-- /Related -->

                        <!-- Upsell -->
                            <?php include(rh_locate_template( 'woocommerce/single-product/full-width-upsell-no-margin.php' ) ); ?>
                        <!-- /Upsell -->                        

                    </div><!-- #product-<?php the_ID(); ?> -->

                    <?php do_action( 'woocommerce_after_single_product' ); ?>
                <?php endwhile; // end of the loop. ?> 
                <?php do_action( 'woocommerce_after_main_content' ); ?>                             
            </div>
        </div>  
        <!-- /Main Side --> 

    </div>
</div>
<!-- /CONTENT -->  
<?php rh_woo_code_zone('bottom');?>