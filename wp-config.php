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
define( 'AUTH_KEY',         '+qJy#T:bgzBB(NLZ<4NnNE0+nH<)-Kcq~vv;e.x@5rb2U)f@CGegyv>qlba?N=yr' );
define( 'SECURE_AUTH_KEY',  'eJ]](TkcYHd.uE&q:Kg|F&p-5$jd_$:C=oI~=B.=tBMezd5@%.bJ4YMPt Q^F4bg' );
define( 'LOGGED_IN_KEY',    '62SKaoTh.KoS<c58aY!VOX|kg#UP[d[JHh=q])MvS]nfggl;Ibn d/>Y4YmClpC4' );
define( 'NONCE_KEY',        ':1Cz@2z{1]?3u_#JFlP_qM~Bw(ARw/ -)swf{n*Y|RUk%)x}{a&go?MkT?*Yoyd|' );
define( 'AUTH_SALT',        ' ,}K8>cMjG0Z#]HC2e(`XQl4 -/*IZO<[&|h7;ju37h.HWB|fZ)9(l~ZSH0ykb`x' );
define( 'SECURE_AUTH_SALT', 'xUG :K(l DAg!AJ__z[|&#melwKh7y.=F^2x+nzK6{=6%|KgUcXBZ`*z&@EZ;guH' );
define( 'LOGGED_IN_SALT',   'jar3J4pZ`a^s3?*`PhXurq=ZGNzNT0>;@ROADZ[:f!qu9j^,Cmid+>~dMLF&~ggG' );
define( 'NONCE_SALT',       '4,Avo-r84nwGFVGZ~(F.`lK&QDOenf#Ss~^TP0O(zMtC%coy Yc2IYLmcVu1GrOT' );

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
