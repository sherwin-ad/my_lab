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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'owen_db' );

/** Database username */
define( 'DB_USER', 'owen-user' );

/** Database password */
define( 'DB_PASSWORD', 'Abcd@1234' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '7=YoW--b54ubm7}kN<:HO_dfQP:4L=!Z;PPozvp&]5aLy3DP*m%e FO2sN5d|Wvy' );
define( 'SECURE_AUTH_KEY',  'YA2=NgmIEnx kq2i9A/HO Gx?.O4jSa2os ;Y^hPn@xw]#z):])}8]G`$MfAxp8V' );
define( 'LOGGED_IN_KEY',    'y$l3~;DkghJk$fLykiDDuQ{w?wTxLnU_jpJYMkY%8fwb2`p/A$[e$}ycTMTA`Gr@' );
define( 'NONCE_KEY',        'd*i%R?YLAZ+oo! Ff1BkJkGxBPn9xTV|UmIKdzdRyOCVq+i.$bA}&6n0~!5$yNI@' );
define( 'AUTH_SALT',        'zyurm_&7@e4hu6*:W*3*QG-%LJmjmX*3,_1nbP![CtLVjx:gklFR=P#p!oxlsmz-' );
define( 'SECURE_AUTH_SALT', 'TABiff(d@?46@ .`oBn[)t&ye_|~N5)J~R`Rk<|Bg@!}RsLMlLR.Shdd~JKZqBiq' );
define( 'LOGGED_IN_SALT',   '6uAkCuIql(o?wnR>A]cxbuB7^3x,7_1!%+[#2haz(>i(,#{|V1xUwPeg7_)*(YiF' );
define( 'NONCE_SALT',       '!aWX`oD@va#h$aBFr*{sq](u%9*a|hp[zon::gqkq/%p94S.8:!G5-Ih@y$KNO~2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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


