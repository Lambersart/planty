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
define( 'AUTH_KEY',          '$_z`iO0_gUn,]Y#J=nX0eFTwlu|^C:{A?27]mJdU9KO0+NknTGnH>^H916[zzI{q' );
define( 'SECURE_AUTH_KEY',   'sBL7D6wTsh=u6S~A}x~33)]nGV9D[E$<6FuNG%4,mN?rL~vgY|{ClAz 3jvJ!}hu' );
define( 'LOGGED_IN_KEY',     'FAz3n.Uy3?zn&-c$g7anPVEXuh&2f,ybA(m!e!4h=B% wWey~b2X2cd/@`0I[hA]' );
define( 'NONCE_KEY',         '&URq,IL8qBg2IeB{PFh(#kMrno#lq#!H~Z%c!cd(nRX9z: 9~&tQE`WJ%=$G<K .' );
define( 'AUTH_SALT',         '|8U^c_+bz+00WE3:Jk8>6FxVzixsNWzs,U.i=Z=I;0>AOltVBzkt;[j*;y?g`1nv' );
define( 'SECURE_AUTH_SALT',  'ybNJ~}|)ikpKB8U~x6Bksq|rccbSc!ll5t|I!y1z?q13mn!ISNd*bWP&CX!1s:+q' );
define( 'LOGGED_IN_SALT',    'w%k[v% aY`=Cm+O~3gEjzbu;![ 1Y*@FRTVeQL;/)h77U[65w}M$DkPSOWm2p9hZ' );
define( 'NONCE_SALT',        'KRMS,lV%x[6 d?&iKcEAK7v(*Gs47Yb=IwZ+TVo^#%y&~m~Y]Dd_XFmIl;|us=74' );
define( 'WP_CACHE_KEY_SALT', '{ YP4e$tYm&Q&9h5pD:gikOv<|}n7P%V1MOO/1)5Ap|^H5Da)lDUrlfv*%FZ>S@P' );


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
