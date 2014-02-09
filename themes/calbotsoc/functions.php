<?php

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// remove left nav stuff 
function remove_links_menu() {
  
     remove_menu_page('index.php'); // Dashboard
	 remove_menu_page('themes.php'); // Appearance
 	 remove_menu_page('edit.php');      //Posts
     remove_menu_page('upload.php'); // Media
     remove_menu_page('link-manager.php'); // Links
     remove_menu_page('edit-comments.php'); // Comments
     remove_menu_page('plugins.php'); // Plugins
     remove_menu_page('options-general.php'); // Settings
     remove_menu_page('tools.php'); // Tools
     remove_menu_page('post-new.php'); // New
}
add_action( 'admin_menu', 'remove_links_menu' );
 

// remove sub nav menus 
function remove_submenus() {
 
  global $submenu;
 
  unset($submenu['index.php'][10]); // Removes 'Updates'.
  unset($submenu['themes.php'][5]); // Removes 'Themes'.
  unset($submenu['options-general.php'][15]); // Removes 'Writing'.
  unset($submenu['options-general.php'][25]); // Removes 'Discussion'.
  unset($submenu['edit.php'][16]); // Removes 'Tags'.
  unset($submenu['edit.php'][15]); // Remove 'Categories'.
  unset($submenu['tools.php'][5]); // Removes 'Available Tools'.
  unset($submenu['tools.php'][10]); // Removes 'Import'.
  unset($submenu['tools.php'][15]); // Removes 'Export'.
  unset($submenu['tools.php'][25]); // Removes 'Delete Site'.
  unset($submenu['users.php'][10]); // Removes 'Add new user'.
  unset($submenu['users.php'][5]); // Removes 'All Users'.
}
add_action( 'admin_menu', 'remove_submenus' );

// redirect user away from dashboard
function dashboard_redirect($url) {
    return 'wp-admin/edit.php?post_type=page';
}
add_filter('login_redirect', 'dashboard_redirect'); 


?>
