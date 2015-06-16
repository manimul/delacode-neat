<?php

function enqueue_styles_scripts(){
    wp_enqueue_style('gfonts','//fonts.googleapis.com/css?family=Roboto+Slab');
}
add_action('wp_enqueue_scripts','enqueue_styles_scripts');





if(get_page_by_title('Home') == null)
{
    $post = array(
        'post_title' => 'Home',
        'post_status' => 'publish',
        'post_type' => 'page',
        'menu_order' => '-100',
        'page_template' => 'page-templates/template-full-width.php'
    );

    wp_insert_post($post);

    $home_page = get_page_by_title('Home');
    update_option('page_on_front',$home_page->ID);
    update_option('show_on_front','page');
}


function new_nav_menu_items($items) 
{
    $items = "";

    $args = array("post_type" => "page", "order" => "ASC", "orderby" => "menu_order");
    $the_query = new WP_Query($args);

    if($the_query->have_posts()): 
        while($the_query->have_posts()):
            $the_query->the_post(); 
                $items .= '<li><a href="#post-'. get_the_ID() .'">' . get_the_title() . '</a></li>';            
        endwhile;
    else: 
        echo "";
    endif;
    return $items;
}
add_filter("wp_nav_menu_items", "new_nav_menu_items");






?>






