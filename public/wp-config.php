<?php
/**
 * The base configurations of the WordPress.
 * Please do not change this file. You can edit your config via
 * - .env or Environmental variables
 * - autobahn.json file
 * - config/*.php files
 */

/** Composer autoload */
require_once(dirname(__DIR__) . '/vendor/autoload.php');

/** Make a new WordPress config and save the table prefix */
$table_prefix = (new Autobahn\Config\WordPress(dirname(__DIR__)))->set()->getConfig('DB_PREFIX');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
