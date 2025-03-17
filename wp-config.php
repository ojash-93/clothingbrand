<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clothingbrand' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'M>Cq5/E:ox*,m*Dwn=?64<S#q,QpSC3u9;_H6J]G/*XvWGK1%spLN8mO5>.Op5s2' );
define( 'SECURE_AUTH_KEY',  '<{1zDqh6O&yce%T6$SKO&$B) 748n]tIqzQ$_bl>tA~`U:J3k%l[r6.9lE!$&DpG' );
define( 'LOGGED_IN_KEY',    'C@(6PZ66x}69fqHRm9PsU6r&9KVV)T!&rN4q9$0X72Yg{gO#E>Tv.<zUsd`2/M,V' );
define( 'NONCE_KEY',        'YkR`N7c#x&Yajj;AH4dN$|G A9V(?sRwYWy0(76K K)&Y90J8S]?`?$?T.4I@Q41' );
define( 'AUTH_SALT',        '>t^idp4@3Iv0KA4^efV9)oF3U9_<[+EU#L3N0vV|0!feB}fR*O|:)sK5vjK`D3_m' );
define( 'SECURE_AUTH_SALT', 'v^HV{NUQ1o3 _-Ko,`K(+hUU&F?A/YjhqzK1ONNBB,-5q{hdd<PmF8$~b+k]6>u<' );
define( 'LOGGED_IN_SALT',   'u?2DHLBWnFi w3E}qx^>[3-nD>%XTc7CkGOtTi}#uM*THm.i,?{she:VjR)EfU,,' );
define( 'NONCE_SALT',       'ed2t3#oDT=.6Fciq{cn xx%k#r1A`+9zl /Pc*,lkOz+H<d)x,b2&|;({m|8sSn*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
