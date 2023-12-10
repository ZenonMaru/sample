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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%+capN&sQS;o,1_(]m^Uu2K#XdRMbdSr7M&iAX(`0pb`?Pg?HlShpeUDVx-eF6>x' );
define( 'SECURE_AUTH_KEY',  'e>?vtC5!b* AW^}X]52*IzuIxwP `4h[zAlh+nts R]K%HO11}y3j9]%3|CV_]6,' );
define( 'LOGGED_IN_KEY',    'Vyb34D6q*KETsV%]MzoUg6jBedS>3Rs(.C*|T{/h/THYQiM$;sk=$H|hbe](Y!D]' );
define( 'NONCE_KEY',        'v>sxh**oF+3S1j$DVj}{021eO=l-d/YLN?! U6=6`ZFzqF><kI{/~qCS+!C+lh@,' );
define( 'AUTH_SALT',        '8iZ|i1hX`R*a{Hg9vQqVH/Q!|F`h^(0o*,4em]*dA5 %i$Q9<nv?0}w{/7SPODqR' );
define( 'SECURE_AUTH_SALT', 'U|zXQ^G-3{*Z~m>`hQTyCRTMC8IQq^=g{1Tmi%k3=dQA@J/+GrTX>OuFdqXMBqtK' );
define( 'LOGGED_IN_SALT',   'P+H^89NyN]+O3y,-@gj_H$79!+F>`)X@fE(42Q60@it|wlbv_-3qqIkm@>tc^?*q' );
define( 'NONCE_SALT',       '{F*3])eXy;6%E|O{o^sSxe^q?=D7m@gZy{ N#(M4Xv-eWf&)/jc]?Hk_pRgS2u6)' );

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
