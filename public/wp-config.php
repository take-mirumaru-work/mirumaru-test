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
define( 'AUTH_KEY',          'EAbrp^u6&9g6}-}$O=MZVIrdL+goG+gjsvRu/FnA%LXyU}_a*g}xd5m*6=}]N._!' );
define( 'SECURE_AUTH_KEY',   'oqJ5_d,,F[Y|SNbB}e+(/6HN)76.MsdYMoRnjn;RRfcQ*hv3!Z#F$9D@zd@?z-KQ' );
define( 'LOGGED_IN_KEY',     'K=*} |r7Hg4;c?,B5>IEo3)&p$:PHYah5A!Q~?wVYFbH;&zfc2i>+n~Ct$Utn>M`' );
define( 'NONCE_KEY',         'lr%O0.//n}Vj9<;a/S&qR)wl([Wpzj]`Fe[vWK4cx2N]b9BS)baWa+sBf&haeUh;' );
define( 'AUTH_SALT',         ',l8z]%BEq8gantbAK@>GJ[hjM1/~j 1ETCs=dddjwbnuRMJ~ZPI1*8,/VN7!Jh&b' );
define( 'SECURE_AUTH_SALT',  '|_y*rElq9#Xah2Z$&])E1k|*NQ}Cs9qD-rlv*MpTLwbkM7[(29I)#3Z0V>Y0cr`o' );
define( 'LOGGED_IN_SALT',    '=2UBmxR-kkpn@UhL1t*a/{#6sH{mQ4nCkGjc$e^C|3Qkp_&h&Nk!D78VCqo)Bdm_' );
define( 'NONCE_SALT',        '%:<aPP}jL`Xlj&#@|Fl _sTc`7e [z]R=j],4UL.rPUhE?K?!2Ag^7S(z3YZpT71' );
define( 'WP_CACHE_KEY_SALT', 'GH+e.u.IswQ:{T t+VN >}.s|+KB9+HslAxY1!f$Mb,QyJ9x2Hj/D1=m+gg*?d:*' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'mirumaru-test.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
