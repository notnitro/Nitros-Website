<?php
define( 'WP_CACHE', false ); // By Speed Optimizer by SiteGround

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'AUTH_KEY',         ')Xl6ut9|:cgcf}#df4Ngdvrp>g2[LED$>%^q;zT%7iKVHAC=0V|9 nO7z5YP*gp?' );
define( 'SECURE_AUTH_KEY',  'lPm7?Ro!xCpV*tc5z^CM^w.;+?4@OT= ep[Cy62QsW_!G`V 3-~p:r6<z:gOxm@.' );
define( 'LOGGED_IN_KEY',    '|^qG9L`%UD_|!<<g7+t@D$0D,Bawg6!fDFMfoRQv>5,?#dZ(%g{S+Sk^UL, |UrV' );
define( 'NONCE_KEY',        'T.uoazpgr}O$<>/_h=(`K cSQHxGJgZG1s`=hgASK?Kp&{93![yYZ;3<a(qw_h|#' );
define( 'AUTH_SALT',        '={6p4_%` $dZ]e_rc8Ol^l7$pR+k0tu-h|pX^zl:#oB`a-FHcZs2swv$vOYyYwYq' );
define( 'SECURE_AUTH_SALT', '=[hpjj0]q35L%(yVf~r,fa;jp=^I&QHZh9E2v*vV>3U(Am&xq?ncK89U*+fDOPkf' );
define( 'LOGGED_IN_SALT',   ')M-8)UYT6v`,Rm;)B>gAo[M9hW2CtM{fRqj?+?=~f>q&. 0-q~TwyiA:I|x!^$}p' );
define( 'NONCE_SALT',       'HcO_x>BR7s{%|)KIU1G&:XGowrU)1%Qu3SImU!$1E<>CA-,6}Ba0Bf<_v*zLsPk@' );

/**#@-*/
/**Upload Speeds*/
@ini_set( 'upload_max_filesize' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'memory_limit', '300M' );
@ini_set( 'max_execution_time', '0' );
@ini_set( 'max_input_time', '300' );

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
