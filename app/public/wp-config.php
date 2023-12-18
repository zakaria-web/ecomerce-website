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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']Odef|Hke-I?2@>GCS#/! |Xk_.l!]-u7>D-yaDp<ZLQC.SZuz5.>t1T0Rv=RS3,' );
define( 'SECURE_AUTH_KEY',   ' /k.v%7FPeYtEaqtsxVgd`q7zOE@@ARx&Q$])6<KnmwKC08M8Va]4G;#nWWzUsyn' );
define( 'LOGGED_IN_KEY',     '=l.K`-OhJ:Xu2;tP5>M7Nd&O,@0*EobK;FbwFw{@]zWTfl;ZWqv)~(_n1zQ_({sZ' );
define( 'NONCE_KEY',         'ql1s)W_H<43YS&XZ0aG(N*Ua-4[^uWa9E]}{1FYW]nsV.k*X8S!-AyovF3!5advd' );
define( 'AUTH_SALT',         '::dg|U>8f{XdV,od1LsM[,NI8`=cCqYx(uRNg?R*d-o@2/#r-nE4Z:0Ps*m/:L@x' );
define( 'SECURE_AUTH_SALT',  '=L23h.XiAC]#ym!F$df*:`0#$CW5DDW47u//iPD1{Ilz~K:XX|+;(]@kASr]M#*q' );
define( 'LOGGED_IN_SALT',    'X8KT~Y3)Ya:~D`hkjc{LQLn+cGWXW-KtRBLIw2T9E+{pR OO(nCa,]5_uX4]u=VS' );
define( 'NONCE_SALT',        'K3<Nlf%?<]5zJ<Rw=vCN5il(d.>p@EL%F.XY7yJG2R`Ei4PK;%:$l7X=jNav=#W4' );
define( 'WP_CACHE_KEY_SALT', 'Yky}6Z2gER(2QokNzm/NsZjB*K?koWPuAPZ:mIL2c$(4IWAomexA_vgin!rM3jF_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
