<?php
/**
 * Created by v2tmobile.
 * Date: 12/12/16
 * Time: 3:28 PM
 * Copyright (c) Ahiho.,JSC. All right reserved.
 */

// Show empty category
add_filter( 'woocommerce_product_subcategories_hide_empty', 'show_empty_categories', 10, 1 );
function show_empty_categories ( $show_empty ) {
    $show_empty  =  true;
    return $show_empty;
}

remove_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
add_action('woocommerce_before_subcategory', function ($category) {
    echo '<div class="category-content">';
}, 10);

remove_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10);

add_action('woocommerce_before_subcategory_title', function ($category) {
    $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url( $thumbnail_id );
    if (! $image) {
        $image = get_template_directory_uri() . '/images/cg-holder.png';
    }
    ?>
    <div class="category-image">
        <a href="<?php echo get_term_link( $category, 'product_cat' ) ?>">
            <img src="<?php echo $image ?>" title="<?php echo $category->name ?>" alt="<?php echo $category->name ?>"/>
        </a>
    </div>
    <?php
}, 10);

remove_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);

add_action('woocommerce_shop_loop_subcategory_title', function ($category) {
    $root_category = explode('/',get_category_parents($category));
    $root_category = $root_category[0];
    ?>
    <div class="category-main-content">
        <h3 class="category-title">
            <a href="<?php echo get_term_link( $category, 'product_cat' ) ?>"><?php echo $category->name ?><span><?php echo $root_category ?></span></a>
        </h3>
        <div class="category-description">
            <?php echo $category->description ?>
        </div>
    </div>
    <?php
}, 10);

remove_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);
add_action('woocommerce_after_subcategory', function ($category) {
    ?>
    </div>
    <?php
    $taxonomy_name = 'product_cat';
    $termchildren = get_term_children( $category->term_id, $taxonomy_name );
    if ($termchildren) :
    ?>
    <div class="category-footer">
        <ul class="list list-inline">
        <?php
        foreach ( $termchildren as $child ) {
            $term = get_term_by( 'id', $child, $taxonomy_name );
            if ($term) {
                echo '<li class="list-item"><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
            }
        }
        ?>
        </ul>
    </div>
    <?php
    endif;
}, 10);


add_action('woocommerce_archive_description','add_subcat_for_product_cat',10);
function add_subcat_for_product_cat(){
 
       global $wp_query;

        if ( 1 === $wp_query->found_posts || ! woocommerce_products_will_display() ) {

           $html = '
           <div class="box-tags">
               <h4>POPULAR TAGS</h4>
             <div class="prodcut_tags">
                  <a href="#">Tag 1</a>
                  <a href="#">Tag 2</a>
                  <a href="#">Tag 3</a>
             </div>
           </div>';
          echo $html;
           
        }else{

         if ( ! $term && ( is_tax() || is_tag() || is_category() ) ) {
               $term = get_queried_object();
         if ( $term ) {
                $curent_term_id = $term->term_id;
                ?>
         <div class="price-range">
            <input id="rangePrice">
          </div>
          <div class="freeCk aleft">
            <label>
              <input type="checkbox" value="" name="freeCheckbox" class="iCheckBox"/>
              <span>Free</span>
            </label>
          </div>
          <div class="filterSelect aleft">
            <select name="formatSelect" style="display: none;">
              <option value="">Formats</option>
              <option value="">3D Studio Max</option>
              <option value="">Auto Desk</option>
              <option value="">Blender</option>
            </select>
          </div>
          <div class="filterSelect aleft">
            <select name="polySelect" style="display: none;">
              <option value="">Poly Count</option>
              <option value="">Up to 5k</option>
              <option value="">10K to 50k</option>
              <option value="">50k to 100k</option>
            </select>
          </div>       


                <ul>
    <?php
        wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true,
        'child_of'    =>$curent_term_id,
        'taxonomy'=>'product_cat',
        'hide_empty'=>false,
        'title_li'=>'',
        'show_option_none'=>''
     ) ); 
    ?> 
      </ul>
   <?php 
         }
       
     }

  }

}

remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);