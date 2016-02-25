<?php
/**
 * Admin Language Per User uninstaller.
 *
 * @link https://developer.wordpress.org/plugins/the-basics/uninstall-methods/#uninstall-php
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * @copyright Copyright (c) 2016 by Unclego and Meitar Moscovitz
 *
 * @package admin_language_per_user\uninstaller
 */

namespace admin_language_per_user;

// Don't execute any uninstall code unless WordPress core requests it.
if (!defined('WP_UNINSTALL_PLUGIN')) { exit(); }

require_once plugin_dir_path(__FILE__) . 'admin-language-per-user.php';

foreach (get_users() as $usr) {
    // Delete all custom user profile data.
    delete_user_meta($usr->ID, Admin_Language::meta_name);
}
