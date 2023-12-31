<?php
/*
  Name: Compact product cart with extra
 */
use ContentEgg\application\helpers\TemplateHelper;  
?>

<?php $random_key = rand(0, 50);?>
<?php wp_enqueue_script('rhwootabs', get_template_directory_uri() . '/js/wootabs.js', array('jquery'), '1.0', true);?>
<?php foreach ($items as $item): ?>
    <?php $offer_price = (!empty($item['price'])) ? $item['price'] : ''; ?>
    <?php $offer_price_old = (!empty($item['priceOld'])) ? $item['priceOld'] : ''; ?>
    <?php $currency_code = (!empty($item['currencyCode'])) ? $item['currencyCode'] : ''; ?>
    <?php $availability = (!empty($item['extra']['availability'])) ? $item['extra']['availability'] : ''; ?>
    <?php $instock = (!empty($item['in_stock'])) ? $item['in_stock'] : ''; ?>
    <?php $afflink = (!empty($item['url'])) ? $item['url'] : '' ;?>
    <?php $aff_thumb = (!empty($item['img'])) ? $item['img'] : '' ;?>
    <?php $offer_title = (!empty($item['title'])) ? wp_trim_words( $item['title'], 12, '...' ) : ''; ?>  
    <?php if(rehub_option('rehub_btn_text') !='') :?><?php $btn_txt = rehub_option('rehub_btn_text') ; ?><?php else :?><?php $btn_txt = esc_html__('Buy this item', 'rehub-theme') ;?><?php endif ;?>
    <?php $features = (!empty($item['extra']['itemAttributes']['Feature'])) ? $item['extra']['itemAttributes']['Feature'] : ''?>
    <?php $gallery_images = (!empty ($item['extra']['imageSet'])) ? $item['extra']['imageSet'] : ''?>
    <div class="rehub_woo_review clearbox compact_w_deals">
        <?php if (!empty ($features) || !empty ($gallery_images)) :?>
            <ul class="rehub_woo_tabs_menu">
                <li><?php esc_html_e('Product', 'rehub-theme') ?></li>
                <?php if (!empty ($features)) :?><li class="contaffdesc"><?php esc_html_e('Features', 'rehub-theme') ?></li><?php endif ;?>
                <?php if (!empty ($gallery_images)) :?><li class="pretty_woo"><?php esc_html_e('Photos', 'rehub-theme') ?></li><?php endif ;?>
            </ul>
        <?php endif ;?>
        <div class="rehub_feat_block">
            <div class="rehub_woo_review_tabs rh_listitem">
                <div class="rh-flex-center-align rh-flex-justify-center mobileblockdisplay">
                    <div class="listbuild_image listitem_column text-center">   
                        <a <?php echo ce_printRel();?> target="_blank" class="re_track_btn img-centered-flex rh-flex-center-align rh-flex-justify-center" href="<?php echo esc_url($afflink) ?>">
                            <?php WPSM_image_resizer::show_static_resized_image(array('src'=> $aff_thumb, 'width'=> 126, 'title' => $offer_title));?>                                   
                        </a>
                        <?php if (!empty($item['extra']['itemLinks'][3])): ?>
                            <span class="add_wishlist_ce">
                                <a href="<?php echo esc_url($item['extra']['itemLinks'][3]['URL']);?>" <?php echo ce_printRel();?> target="_blank" ><i class="rhicon rhi-heart"></i></a>
                            </span>
                        <?php endif; ?>                    
                    </div>
                    <div class="rh-flex-grow1 listitem_title listitem_column">
                        <h4 class="offer_title">
                            <a <?php echo ce_printRel();?> target="_blank" class="re_track_btn" href="<?php echo esc_url($afflink) ?>">
                                <?php echo esc_attr($offer_title); ?>
                            </a>
                        </h4>
                        <?php if ($item['description']): ?>
                            <div class="font90 greycolor lineheight20"><?php echo esc_attr($item['description']); ?></div>
                            
                        <?php elseif ($features): ?>  
                            <ul class="featured_list font90 greycolor lineheight20">
                                <?php $length = $maxlength = 0;?>
                                <?php foreach ($features as $k => $feature): ?>
                                    <?php if(is_array($feature)){continue;}?>
                                    <?php $length = strlen($feature); $maxlength += $length; ?> 
                                    <li><?php echo esc_attr($feature); ?></li>
                                    <?php if($k >= 4 || $maxlength > 200) break; ?>                                    
                            <?php endforeach; ?>
                            </ul>                     
                        <?php endif; ?>
                        <small class="small_size">
                            <?php if ($availability): ?>
                                <span class="yes_available"><?php echo ''.$availability; ?></span>
                            <?php endif; ?>
                            <?php if ((bool) $item['extra']['IsEligibleForSuperSaverShipping']): ?>
                                <?php esc_html_e('& Free shipping', 'rehub-theme'); ?>
                            <?php endif; ?>                         
                        </small> 
                        <div class="font80 rh_opacity_7"><?php esc_html_e('Last update was on: ', 'rehub-theme'); ?><?php echo TemplateHelper::getLastUpdateFormatted('Amazon', $post_id); ?></div>                               
                    </div>
                    <div class="listbuild_btn listitem_column text-center pr10">
                        <div class="priced_block clearfix">
                            <?php if(!empty($offer_price)) : ?>
                                <span class="price_count mb5">
                                    <ins class="font110 rehub-main-color">
                                        <?php echo TemplateHelper::formatPriceCurrency($offer_price, $currency_code, '<span class="cur_sign">', '</span>'); ?>
                                    </ins>
                                    <?php if(!empty($offer_price_old)) : ?>
                                    <del>
                                        <?php echo TemplateHelper::formatPriceCurrency($offer_price_old, $currency_code, '<span class="amount">', '</span>'); ?>
                                    </del>
                                    <?php endif ;?>                                   
                                </span>                         
                            <?php endif ;?>
                            <div>
                                <a class="re_track_btn btn_offer_block" href="<?php echo esc_url($afflink) ?>" target="_blank" <?php echo ce_printRel();?>>
                                    <?php echo esc_attr($btn_txt) ; ?>
                                </a>
                                <?php $offer_coupon_mask = 1 ?>
                                <?php if(!empty($item['extra']['coupon']['code_date'])) : ?>
                                    <?php 
                                    $timestamp1 = strtotime($item['extra']['coupon']['code_date']); 
                                    $seconds = $timestamp1 - time(); 
                                    $days = floor($seconds / 86400);
                                    $seconds %= 86400;
                                    if ($days > 0) {
                                      $coupon_text = $days.' '.__('days left', 'rehub-theme');
                                      $coupon_style = '';
                                    }
                                    elseif ($days == 0){
                                      $coupon_text = esc_html__('Last day', 'rehub-theme');
                                      $coupon_style = '';
                                    }
                                    else {
                                      $coupon_text = esc_html__('Coupon is Expired', 'rehub-theme');
                                      $coupon_style = 'expired_coupon';
                                    }                 
                                    ?>
                                <?php endif ;?>
                                <?php  if(!empty($item['extra']['coupon']['code'])) : ?>
                                    <?php wp_enqueue_script('zeroclipboard'); ?>
                                    <?php if ($offer_coupon_mask !='1' && $offer_coupon_mask !='on') :?>
                                        <div class="rehub_offer_coupon not_masked_coupon <?php if(!empty($item['extra']['coupon']['code_date'])) {echo ''.$coupon_style ;} ?>" data-clipboard-text="<?php echo esc_attr($item['extra']['coupon']['code']) ?>"><i class="rhicon rhi-scissors fa-rotate-180"></i><span class="coupon_text"><?php echo esc_attr($item['extra']['coupon']['code']) ?></span></div>   
                                    <?php else :?>
                                        <?php wp_enqueue_script('affegg_coupons'); ?>
                                        <div class="rehub_offer_coupon masked_coupon <?php if(!empty($item['extra']['coupon']['code_date'])) {echo ''.$coupon_style ;} ?>" data-clipboard-text="<?php echo esc_attr($item['extra']['coupon']['code']) ?>" data-codetext="<?php echo esc_attr($item['extra']['coupon']['code']) ?>" data-dest="<?php echo esc_url($item['url']) ?>"><?php if(rehub_option('rehub_mask_text') !='') :?><?php echo rehub_option('rehub_mask_text') ; ?><?php else :?><?php esc_html_e('Reveal coupon', 'rehub-theme') ?><?php endif ;?><i class="rhicon rhi-external-link-square"></i></div>   
                                    <?php endif;?>
                                    <?php if(!empty($item['extra']['coupon']['code_date'])) {echo '<div class="time_offer">'.$coupon_text.'</div>';} ?>    
                                <?php endif ;?>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty ($features)) :?>
                <div class="rehub_woo_review_tabs contaffdesc">
                    <div class="wpsm_pros">
                        <ul class="featured_list font90">
                            <?php foreach ($features as $k => $feature): ?> 
                                <li><?php echo esc_attr($feature); ?></li>                                   
                        <?php endforeach; ?>
                        </ul>
                    </div>                                 
                </div>
            <?php endif ;?>  
            <?php if (!empty ($gallery_images)) :?>
                <div class="rehub_woo_review_tabs pretty_woo modulo-lightbox">
                    <?php $randomgallery = 'rh_ceam_gallery'.rand(1, 50);?>
                    <?php wp_enqueue_script('modulobox'); wp_enqueue_style('modulobox');
                        foreach ($gallery_images as $gallery_img) {
                            ?> 
                            <a data-rel="<?php echo ''.$randomgallery;?>" href="<?php echo esc_attr($gallery_img['LargeImage']) ;?>" data-thumb="<?php echo esc_attr($gallery_img['LargeImage']) ;?>" data-title="<?php echo esc_attr($offer_title);?>">                        
                                <img src="<?php echo esc_attr($gallery_img['ThumbnailImage']) ;?>" alt="<?php echo esc_attr($offer_title); ?>" /> 
                            </a>
                            <?php
                        }
                    ?>
                </div>           
            <?php endif ;?>                                                                    
        </div>
    </div>
    <div class="clearfix"></div>
<?php endforeach; ?>