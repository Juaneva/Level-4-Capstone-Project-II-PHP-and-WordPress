<?php
/*
Plugin Name: cool_tech
Plugin URI: https://www.hyperiondev.com/
Description: A plugin that keeps track of post views
Version: 1.0
Author: Juaneva du Plessis
Author URI: https://www.hyperiondev.com/
Licence: UNLICENCED
*/

// When a user views the post, update views
function cool_tech_new_view(){
    // only interested in single posts here
    if (!is_single()) return null;
    global $post; // post in question
    $views = get_post_meta($post->ID, 'cool_tech_views', true);
    if (!$views) // if $views is undefined
        $views = 0;
    
    $views++;

    update_post_meta($post->ID, 'cool_tech_views', $views);
    return $views;
}

// This event triggers whenever a frontend page is loaded. 
// Function runs when the page loaded is of a single post.
add_action('wp_head', 'cool_tech_new_view');

// When author saves a new blog and there is no views, make views 0, else do nothing. 
function cool_tech_new_view_save($post_id, $post ){

    // If post is Not a page( test by post_id) Then action
    if ( !is_page($post_id)){
        //global $post; // post in question
        $views = get_post_meta($post->ID, 'cool_tech_views', true);
        
        // if $views is undefined
        if (!$views){
            // Update views to 0 if not defined
            $views = 0;
            update_post_meta($post_id, 'cool_tech_views', $views);
        }
        return $views;
    }
}

// When a new post is saved by author, the cool_tech_new_view_save function should run which will give the post 0 views
add_action('save_post', 'cool_tech_new_view_save',10,2); 


// Display the views on blogs
function cool_tech_views(){
    global $post;
    $views = get_post_meta($post->ID, 'cool_tech_views', true);
    if (!$views)
    $views = 0;

    if ($views<1000){
        return $views." Views";
    } else if($views>=1000 && $views<1000000){
        //Display in K per thousand
        $custom_view = round($views/1000);
        return $custom_view."K Views";
    } else if($views>=1000000){
        //Display in M per Million
        $custom_view = round($views/1000000);
        return $custom_view."M Views";
    }
}

// Summary of the top 10 blog views, viewed in the last hour
function cool_tech_list(){
    $searchParams = [
        'posts_per_page'=>10,
        'post_type'=>'post',
        'post_status'=>'publish',
        'meta_key'=>'cool_tech_views',
        'orderby'=>'meta_value_num',
        'order'=>'DESC',
        ['date_query' => ['after'=> '-1 hour']]
    ];

    // Ordered list for hot-item-list
    $list = new WP_Query($searchParams);
    if ($list->have_posts()){
        global $post;
        echo '<ol class="hot-item-list">';

        while($list->have_posts()){
            $list->the_post();
            // Use the cool_tech_views function to display amount of views
            echo '<li><a href="'.get_permalink($post->ID).'">';
            the_title();
            echo '</a>'.cool_tech_views().'</li>';
        }

        echo '</ol>';
    }
}