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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'VacationRental' );

/** Database username */
define( 'DB_USER', 'admin22' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'm~B9 2Ivbm- )]D}7.eeu)P9yObBk,,oy@BOp>YO9)A]?prTEyUnm/9B2e7ToZGg' );
define( 'SECURE_AUTH_KEY',  'h[j*H9UR{Iv(UE2S{SMZo(W{|zG]i|z`7q- KgG9V{JqZW@?X)5S<Z6!2m*y4/uB' );
define( 'LOGGED_IN_KEY',    '}U8_2IBtp0|w8:tWTtmaybn={}Z?8=w@_lcvYp|CvADa}]Z`eBf`/u%YFO5@[?6=' );
define( 'NONCE_KEY',        '<8r%&]zA-`~gb/FHsRH}ikTq4[:MF]@)Ok}dk$.v=;Z0 g<:yqxw!NwbZ8vg;Y+a' );
define( 'AUTH_SALT',        't7,LWb`0q1VglSmb]YVU~:+nsR lXA0VG`nu5&;TEvjfVp;3>$QRtDuj9_/pZ (O' );
define( 'SECURE_AUTH_SALT', ')H8Hbbuo7MU}$l|S.0HdI^5FF({0#{Nz<=!8&~}vY<3Nu|1daV3tn~^d2^<Z5O{9' );
define( 'LOGGED_IN_SALT',   'p/3o0PBwVe1w_mte(qN{O!<T)AKhiStDAK&1ZZ%k]d@H*RdJms5cgXFKJ_+(PwZ-' );
define( 'NONCE_SALT',       '*PgY,[MYUKY2Jdq<G|w|Ef?L2T<;fjp)0|etqKY644UIKn2j7uEB/dT&zW&7xsTX' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
