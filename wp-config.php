<?php
/**
 * The base configuration for WordPress | V
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shantilainn_wp');

/** MySQL database username */
define('DB_USER', 'webinnshant');

/** MySQL database password */
define('DB_PASSWORD', 'YwwjLc^J&&%p$pC&5JkPU-Lq%gAAqg5K!RzMfrUG');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D6@]6Xu-zJRI#}F%d8-}L!L5gn--ZnV;&ZZ>!(_rVjlL2NG/xG{H1smRBT{tEzB=');
define('SECURE_AUTH_KEY',  '@P`A^&9Ah?w{l{HKo(h#aP=uV{+:dzp7/$NB4q*}QTk-<|!2fmkkx|+Y,SP=^x(`');
define('LOGGED_IN_KEY',    '{I.NGWPcU3iq~x&Z&QyYi.!<=);XdQv&@E,(&+oSR bEx*:OY-mA3:xk)bF].3%?');
define('NONCE_KEY',        '5OkVc]ArScg-Tb?SfM[8.M)w-e38FYK}s||;~X&9ff<&< (c^#9WR*F993.C>|z#');
define('AUTH_SALT',        '6?y9w+aS..;GbWqqB70xF|PZ}:|/#tGSTZR5~/|KbeOadSqi.i]Ks*FT`-zUMU~w');
define('SECURE_AUTH_SALT', 'o:FF7lVH+8qrLd{z;KQrr%yR @J7V}Kt>}G7(7AYMd0{1pa24-l-E)g^*_/W~B?u');
define('LOGGED_IN_SALT',   '7 qQ|WAf)4|17-DA?6:n NSXtF`k)WzG6;*t(|D|}P1@fr9*M3zVPx-ytr[ntfuE');
define('NONCE_SALT',       'eL#f,vo=G5&(QL9c!g!d27=C{];azgpFXQxjgr|.y.ZP;2|rw9y[_fp0$3?69vlz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// Turn debugging on
define('WP_DEBUG', false);

// Tell WordPress to log everything to /wp-content/debug.log
define('WP_DEBUG_LOG', false);

// Turn off the display of error messages on your site
define('WP_DEBUG_DISPLAY', false);

// make method direct
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
