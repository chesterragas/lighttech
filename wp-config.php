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
define( 'DB_NAME', 'lighttechdb' );

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
define( 'AUTH_KEY',         'JREm)k@O}UvKcAp`JJ.kubd%]TNAf<UoD/3}]2*kTvv(O]P*K/gJh;SnRh8$4sgB' );
define( 'SECURE_AUTH_KEY',  '6s)Ab7j0_e0L6Y#O/:bdn]p:gz#l2Ax*Jx!r#04&Y$KLc%Q#TpTl@V6v]VUYbY]_' );
define( 'LOGGED_IN_KEY',    'PajmF@K7RE;b2B#XFt3:,.TPuN,]4KusytInLJbS0sxOHcRhWS-KeJ5/Wt>!w_?2' );
define( 'NONCE_KEY',        '7Ys/WXl;eag,n=5Ko}vm=|M/T0<$9`945y7p.,=v<66l!m^1m[oOg?[@`Pdtz6YO' );
define( 'AUTH_SALT',        '?lHRZ>Z(@yt(y@eH-Lu$KUl<G[=rD-C{<[ac!bh0sy]f:rD.*+.~B5N%+F6`ImtL' );
define( 'SECURE_AUTH_SALT', '3/O$dhR>9y|wve6sER3x{:K{S;gCrSpZF9$g9;U9I$Lxuu]dyq@dd0oHZqy/u}{q' );
define( 'LOGGED_IN_SALT',   '/<DR&0eW4*!3vZ`P#R*TD@G]6/{emcS uh,VQ@cRhR)ZIPBAm#nTexxb|W-RtVst' );
define( 'NONCE_SALT',       'iOGUaVjq@dBPPyw}mT N,ovFUec1}JU11+vBdQLXiA N@+[{Gz5PH!I<<&oFq=h~' );

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
