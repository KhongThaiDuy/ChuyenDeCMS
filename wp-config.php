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
define( 'AUTH_KEY',         '9o)d)Q+gWp -f%g;&hMWuwf@d@jSwTZ0*SE,Qg[Xg;zAd,c8ZnbL)p&zj|>K^fX1' );
define( 'SECURE_AUTH_KEY',  'ru_%s+DrqOWL`~$I#Z>7<+j6 C=*-N7c*.R6A *crJbVEdXVZqVe3VKK~njU2 2L' );
define( 'LOGGED_IN_KEY',    'W_hI`H@zEg>h6KZb(oPWz<+A R- fbmD$gt98Q_6Xi>jCRRh$S=e|Qtcs}_}-Ito' );
define( 'NONCE_KEY',        '<g}NEA,.dNP0+bnO.`oS]I#8bW2A/E_VdDs2[v7KRhAugwjR&]a,6}k/A?c+N*Y$' );
define( 'AUTH_SALT',        'OMzy~5(!I[=!`LZKBo~>OHcoA-?QLk7tQF6pPd==U !c]Nan:/N+Zd0GA_Ku4^cH' );
define( 'SECURE_AUTH_SALT', '1/FGRt6|5GRP0I8@2>rA;sbDu%,l4i$dH|)Jt4HVBeV|2d,pcFZrcA@,TvV6DKlm' );
define( 'LOGGED_IN_SALT',   'hW<:t@1fB/mzdCK{6/!92Cw<_WfoWuidN+0FT[<4Oci.eYXMVx/;G+ue[@d3=mQ6' );
define( 'NONCE_SALT',       'TgLNg8DYhu}M=]}Ki%>m`pMi^MM-J&}92-2nU;6&xApBPL/axV[=F@x9Tly%7S*~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
