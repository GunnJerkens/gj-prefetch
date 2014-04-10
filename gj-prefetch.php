<?php
/*
Plugin Name: GJ Prefetch
Plugin URI: http://gunnjerkens.com
Description: Completes a prefetch of the next subsequent post on any pages that satisfy is_single.
Version: 0.1
Author: Gunn|Jerkens
Author URI: http://gunnjerkens.com
*/

class gj_prefetch {

  function __construct() {
   add_action( 'wp_head', array( &$this, 'gj_retrieve' ) );
  }

  public function gj_retrieve() {
    if (is_single()) {

      $prevPost = get_previous_post();
      $prevArray = (array) $prevPost;

      if(isset($prevArray['ID'])) {
        $prevID = $prevArray['ID'];
      }

      if(isset($prevArray['ID'])) {
        $prevID = $prevArray['ID'];
        $prevID = get_permalink($prevID);
        echo '<link rel="prefetch" href="'.$prevID.'">';
        echo '<link rel="prerender" href="'.$prevID.'">';
      }
    }
  }

}

new gj_prefetch();