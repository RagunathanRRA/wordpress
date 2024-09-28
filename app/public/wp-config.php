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
define( 'AUTH_KEY',          '[&g9ZLF}Bf%:=B_+}`uS}!gWR,q9t.[sp< u3fc4R3g]OeP{9ghwIeO+eSV6T578' );
define( 'SECURE_AUTH_KEY',   ')TaydVUWJ_^^xVnE~!st,^+W`i2BUZ0I?!d`Ol(h?rTv~k7+jzR_F,8/hA59h %o' );
define( 'LOGGED_IN_KEY',     '?jra~<UQ*=Icd8ZnWtTxQ+X[YBVO}5TKF4yc[~gOk3(s.Yqyo%lDH&)q2pY8O8NR' );
define( 'NONCE_KEY',         '+5y2s>u]dY)|;kfrHAtfJvnT}&O+F%Of/t,J/ew=>!qgiOn},ZiVULJT3:k0[!BH' );
define( 'AUTH_SALT',         ',W3G^r7=)kT`yV>qjS)1sr^RBE:1ky0dQ-}U4Ab@X$J-S0Q-UOfNq?V,o{i1DEV(' );
define( 'SECURE_AUTH_SALT',  'K=2)(~VgL76OGR13q2K/gJg4Y_Jb/FdV>*Tb1Smysi#GkG(T_sHNXkcF14:/$IZ)' );
define( 'LOGGED_IN_SALT',    'Db$e8]t,QX5S oUQz<SBf:%>Lhl<$f#J7*E~J^^D/X4US=Oe5CirpWM<zbkl,{,h' );
define( 'NONCE_SALT',        '[W4Nw 094f)auy&dWY/eh]&;I#0q5/ pnEB+pt54im^#Ir[Un?h>ZQff  WKs|92' );
define( 'WP_CACHE_KEY_SALT', 'Q[ ?45EaM0,w?6vD1`XD!Du+_&k1*SuzfT}S(0H <Nx/b>TyVAv~fB@j7Ai}.2kf' );


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
