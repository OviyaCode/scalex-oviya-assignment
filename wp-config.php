<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Scalex' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jEwNt0xIZZWdvjM9zlRb60nxhctuYNxzJNMdImsdw9ABsJedFYIEvp46L4L8IoKN' );
define( 'SECURE_AUTH_KEY',  'NQh7fn6ylQGuiCElqwGTJ5okt66PjhltZLrwUKemWFJznzzbKCdM4Rz6IIapQUmK' );
define( 'LOGGED_IN_KEY',    'LWfdfCiNMyKC1czVCN6jS9pzQFqjWjN4fsC5n0Jrk83Pdp18TPGQ80m5u34gi9p2' );
define( 'NONCE_KEY',        'Cxb84UYq5hCXo9LEtQQCAzEfHPq4dJerfHc4FKE0IvLnOXOHductrm7Zw46KHcjo' );
define( 'AUTH_SALT',        'DhPnQqS6CithE09uzVnM2oPdpFkHKa2tknNDW4xt7F7Mtl1ReoXuknhGNedawS9V' );
define( 'SECURE_AUTH_SALT', 'ObbZDbZOqAhAKgGrV3FNczXrWc8fyC08stoMb3oovC43exzDWxYRLcT0hAryMaTA' );
define( 'LOGGED_IN_SALT',   '6yyNDTDapRgG03VhCnBUOmRfY9hwIGhWQ3CtBQOGVEy1f2LLsfVGW8zFvdwj7CO9' );
define( 'NONCE_SALT',       'H5Ho1IxQYlzk3dJYhbD72MdtQz1aRYKKLW6RoZmimBNgQVBdih1I02P6rCpKY2YB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
