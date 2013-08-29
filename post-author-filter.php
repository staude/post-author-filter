<?php
/*
Plugin Name: Post Author Filter
Plugin URI: http://www.staude.net/wordpress/plugins/PostAuthorFilter
Description: Add a author selection on post / page editpage
Version: 0.1
Author: Frank Staude
Text Domain: post_author_filter
Domain Path: languages
Author URI: http://www.staude.net/
Compatibility: WordPress 3.6
License: GPL
*/

if (!class_exists( 'post_author_filter' ) ) {

    include_once dirname( __FILE__ ) .'/class-post-author-filter.php';

    $post_author_filter = new post_author_filter();

}