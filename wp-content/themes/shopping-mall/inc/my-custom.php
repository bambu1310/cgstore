<?php

add_action( 'init', 'custom_taxonomy_Item' );
function custom_taxonomy_Item()  {
$labels = array(
    'name'                       => 'Type Product',
    'singular_name'              => 'Type Product',
    'menu_name'                  => 'Type Product',
    'all_items'                  => 'All Type Product',
    'parent_item'                => 'Parent Type Product',
    'parent_item_colon'          => 'Parent Type Product:',
    'new_item_name'              => 'New Type Product Name',
    'add_new_item'               => 'Add New Type Product',
    'edit_item'                  => 'Edit Type Product',
    'update_item'                => 'Update Type Product',
    'separate_items_with_commas' => 'Separate Type Product with commas',
    'search_items'               => 'Search Items',
    'add_or_remove_items'        => 'Add or remove Items',
    'choose_from_most_used'      => 'Choose from the most used Items',
);
$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
 register_taxonomy( 'type_product', 'product', $args );
 register_taxonomy_for_object_type( 'type_product', 'product' );


$labels_format = array(
    'name'                       => 'Format',
    'singular_name'              => 'Format',
    'menu_name'                  => 'Format',
    'all_items'                  => 'All Format',
    'parent_item'                => 'Parent Format',
    'parent_item_colon'          => 'Parent Format:',
    'new_item_name'              => 'New Format',
    'add_new_item'               => 'Add New Format',
    'edit_item'                  => 'Edit Format',
    'update_item'                => 'Update Format',
    'separate_items_with_commas' => 'Separate Format with commas',
    'search_items'               => 'Search Format',
    'add_or_remove_items'        => 'Add or remove Format',
    'choose_from_most_used'      => 'Choose from the most used Format',
);
$args_format = array(
    'labels'                     => $labels_format,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'product_format', 'product', $args_format );
 register_taxonomy_for_object_type( 'product_format', 'product' );

  
$labels_format_job = array(
    'name'                       => 'Format',
    'singular_name'              => 'Format',
    'menu_name'                  => 'Format',
    'all_items'                  => 'All Format',
    'parent_item'                => 'Parent Format',
    'parent_item_colon'          => 'Parent Format:',
    'new_item_name'              => 'New Format',
    'add_new_item'               => 'Add New Format',
    'edit_item'                  => 'Edit Format',
    'update_item'                => 'Update Format',
    'separate_items_with_commas' => 'Separate Format with commas',
    'search_items'               => 'Search Format',
    'add_or_remove_items'        => 'Add or remove Format',
    'choose_from_most_used'      => 'Choose from the most used Format',
);
$args_format_job = array(
    'labels'                     => $labels_format_job,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'job_format', 'jobs', $args_format_job );
 register_taxonomy_for_object_type( 'job_format', 'jobs' );

$labels_type_job = array(
    'name'                       => 'Type Job',
    'singular_name'              => 'Type Job',
    'menu_name'                  => 'Type Job',
    'all_items'                  => 'All Type Job',
    'parent_item'                => 'Parent Type Job',
    'parent_item_colon'          => 'Parent Type Job:',
    'new_item_name'              => 'New Type Job',
    'add_new_item'               => 'Add New Type Job',
    'edit_item'                  => 'Edit Type Job',
    'update_item'                => 'Update Type Job',
    'separate_items_with_commas' => 'Separate Type Job with commas',
    'search_items'               => 'Search Type Job',
    'add_or_remove_items'        => 'Add or remove Type Job',
    'choose_from_most_used'      => 'Choose from the most used Type Job',
);
$args_type_job = array(
    'labels'                     => $labels_type_job,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'type_job', 'jobs', $args_type_job );
 register_taxonomy_for_object_type( 'type_job', 'jobs' );

 // tax for tutorial

$labels_cat_tutorial = array(
    'name'                       => 'Tutorial Category',
    'singular_name'              => 'Tutorial Category',
    'menu_name'                  => 'Tutorial Category',
    'all_items'                  => 'All Tutorial Category',
    'parent_item'                => 'Parent Tutorial Category',
    'parent_item_colon'          => 'Parent Tutorial Category:',
    'new_item_name'              => 'New Tutorial Category',
    'add_new_item'               => 'Add New Tutorial Category',
    'edit_item'                  => 'Edit Tutorial Category',
    'update_item'                => 'Update Tutorial Category',
    'separate_items_with_commas' => 'Separate Tutorial Category with commas',
    'search_items'               => 'Search Tutorial Category',
    'add_or_remove_items'        => 'Add or remove Tutorial Category',
    'choose_from_most_used'      => 'Choose from the most used Tutorial Category',
);
$args_cat_tutorial = array(
    'labels'                     => $labels_cat_tutorial,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'tutorial_cat', 'tutorial', $args_cat_tutorial );
 register_taxonomy_for_object_type( 'tutorial_cat', 'tutorial' );

 $labels_tag_tutorial = array(
    'name'                       => 'Tutorial Tags',
    'singular_name'              => 'Tutorial Tags',
    'menu_name'                  => 'Tutorial Tags',
    'all_items'                  => 'All Tutorial Tags',
    'parent_item'                => 'Parent Tutorial Tags',
    'parent_item_colon'          => 'Parent Tutorial Tags:',
    'new_item_name'              => 'New Tutorial Tags',
    'add_new_item'               => 'Add New Tutorial Tags',
    'edit_item'                  => 'Edit Tutorial Tags',
    'update_item'                => 'Update Tutorial Tags',
    'separate_items_with_commas' => 'Separate Tutorial Tags with commas',
    'search_items'               => 'Search Tutorial Tags',
    'add_or_remove_items'        => 'Add or remove Tutorial Tags',
    'choose_from_most_used'      => 'Choose from the most used Tutorial Tags',
);
$args_tag_tutorial = array(
    'labels'                     => $labels_tag_tutorial,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'tutorial_tag', 'tutorial', $args_tag_tutorial );
 register_taxonomy_for_object_type( 'tutorial_tag', 'tutorial' );

//software

$labels_software_tutorial = array(
    'name'                       => 'Tutorial Software',
    'singular_name'              => 'Tutorial Software',
    'menu_name'                  => 'Tutorial Software',
    'all_items'                  => 'All Tutorial Software',
    'parent_item'                => 'Parent Tutorial Software',
    'parent_item_colon'          => 'Parent Tutorial Software:',
    'new_item_name'              => 'New Tutorial Software',
    'add_new_item'               => 'Add New Tutorial Software',
    'edit_item'                  => 'Edit Tutorial Software',
    'update_item'                => 'Update Tutorial Software',
    'separate_items_with_commas' => 'Separate Tutorial Software with commas',
    'search_items'               => 'Search Tutorial Software',
    'add_or_remove_items'        => 'Add or remove Tutorial Software',
    'choose_from_most_used'      => 'Choose from the most used Tutorial Software',
);
$args_software_tutorial = array(
    'labels'                     => $labels_software_tutorial,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'tutorial_software', 'tutorial', $args_software_tutorial );
 register_taxonomy_for_object_type( 'tutorial_software', 'tutorial' );


$labels_category_gallery = array(
    'name'                       => 'Gallery Category',
    'singular_name'              => 'Gallery Category',
    'menu_name'                  => 'Gallery Category',
    'all_items'                  => 'All Gallery',
    'parent_item'                => 'Parent Gallery',
    'parent_item_colon'          => 'Parent Gallery',
    'new_item_name'              => 'New Gallery',
    'add_new_item'               => 'Add New Gallery Category',
    'edit_item'                  => 'Edit Gallery Category',
    'update_item'                => 'Update Gallery Category',
    'separate_items_with_commas' => 'Separate Gallery with commas',
    'search_items'               => 'Search Gallery Category',
    'add_or_remove_items'        => 'Add or remove Gallery Category',
    'choose_from_most_used'      => 'Choose from the most used Gallery Category',
);
$args_category_gallery = array(
    'labels'                     => $labels_category_gallery,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'category_gallery', 'gallery', $args_category_gallery );
 register_taxonomy_for_object_type( 'category_gallery', 'gallery' );

 $labels_tag_gallery = array(
    'name'                       => 'Gallery Tags',
    'singular_name'              => 'Gallery Tags',
    'menu_name'                  => 'Gallery Tags',
    'all_items'                  => 'All Gallery Tags',
    'parent_item'                => 'Parent Gallery Tags',
    'parent_item_colon'          => 'Parent Gallery Tags:',
    'new_item_name'              => 'New Gallery Tags',
    'add_new_item'               => 'Add New Gallery Tags',
    'edit_item'                  => 'Edit Gallery Tags',
    'update_item'                => 'Update Gallery Tags',
    'separate_items_with_commas' => 'Separate Gallery Tags with commas',
    'search_items'               => 'Search Gallery Tags',
    'add_or_remove_items'        => 'Add or remove Gallery Tags',
    'choose_from_most_used'      => 'Choose from the most used Gallery Tags',
);
$args_tag_gallery = array(
    'labels'                     => $labels_tag_gallery,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);

 register_taxonomy( 'gallery_tag', 'gallery', $args_tag_gallery );
 register_taxonomy_for_object_type( 'gallery_tag', 'gallery' );


}
 ?>