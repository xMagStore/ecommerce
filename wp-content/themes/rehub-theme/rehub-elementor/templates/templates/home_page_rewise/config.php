<?php

if ( ! defined('ABSPATH') ) {
    exit('restricted access');
}

return [
    'id'               => 'home_page_rewise',
    'title'            => 'Home Page Rewise',
    'thumbnail'        => $local_dir_url . 'thumbnail.jpg',
    'tmpl_created'     => time(),
    'author'           => 'WPSM',
    'url'              => 'http://rewise.wpsoul.net/',
    'type'             => 'page',
    'subtype'          => 'wpsm',
    'tags'             => ['home'],
    'menu_order'       => 0,
    'popularity_index' => 10,
    'trend_index'      => 1,
    'is_pro'           => 0,
    'has_page_settings'=> 1,
    'accessLevel' => null
];
