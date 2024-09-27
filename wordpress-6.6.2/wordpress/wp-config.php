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
define( 'DB_NAME', 'cms_demo' );

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
define( 'AUTH_KEY',         'vuE1?B`2E%tk}V0M0_1&/;K{21p&&,b3~iX^<Gt,;OvaYU^qlD$g!,5k>8%SY)Mp' );
define( 'SECURE_AUTH_KEY',  'YU;950Nw}M<ITr9K5-([+3PC_+.(ldR8|!]([:vuaKR,Em(zjPUB>V~8eT(aCX=S' );
define( 'LOGGED_IN_KEY',    'L:gIG5],z`1c~%<Ufbw|G-ZfFW}U#8TltwH&]Ov#4a)TG#&&Q7K7ZF=Bb!o ]IYh' );
define( 'NONCE_KEY',        '2zqo2B=E9fvK,f>XJa.wE WaWB|;J}r)dLD,r/4rZcf(1d1HNc]eAOz`NDw*+M4.' );
define( 'AUTH_SALT',        'UEm!=rj/gkmM*!U1Nc6NZnHs6<ckg|+%ZIt{M3S%)K}HQv2Z?_#7(#-=5nG(gf2F' );
define( 'SECURE_AUTH_SALT', 'iE$W}>-0~FB3GU_UKTcUl8A-{&9? h=~0r?^acUJ!WJ]q2OA<P0(u%g|VzCG? ]]' );
define( 'LOGGED_IN_SALT',   '7PnfTSrml$If|B]s7P-o_S78.{ZoSvN~55Q`F/ld`mtSAG4A=IBEhmQPOn[,ccEb' );
define( 'NONCE_SALT',       'B9$>2xLB_p3eY|no!iO9[p$ dM7jD,dv*j+b%UGX0VUHEK=sp$O%esiQO#L&V@%P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_New';

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
