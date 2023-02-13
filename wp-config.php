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
define( 'DB_NAME', 'as_colombia' );

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
define( 'AUTH_KEY',         'W,<PSq>qSWksG7;s_,-Aue b:{hK,$X 6=}5A*uQL`I(?eGm1@^qj==~eSaiH^Ld' );
define( 'SECURE_AUTH_KEY',  'MUNiRsR6D74J6&:Sum+SpU/*)nqZwKnEd2=$2j.8yM0yFZ)O%s?:u{y,NXD_=|$_' );
define( 'LOGGED_IN_KEY',    'R@8`~|%kmGE~>u}OJEVexRG5?TC]-+*/I JBx;nY&@&X~6Zg:ZL,)Z#5Ko9TKr|`' );
define( 'NONCE_KEY',        'UQx)h<9JNzO2f&n]PC*+-cO0Wrph5a7?@a$_CX+976C_/m2CoiGB~+8 j_GV~{ik' );
define( 'AUTH_SALT',        'bB>]2]1V;urx/`$7(lg%rt1gY==7e?4xa=uioV1KeNl{5ZhCsE,sr:Z[@,{0JO=_' );
define( 'SECURE_AUTH_SALT', 'v$GW?,&:z]7gb9?*{6EHCQ5mQ]i=/)a4v&I.i@b+OH%03nzcdJ: 6P;*g#|l1z:S' );
define( 'LOGGED_IN_SALT',   'n,mO4vip?u+{ ayeZ+X ;ys1Y~Y,VIvd-=AYLQ9ul1IvwmZ{GKy[SaV!@ES`5mF:' );
define( 'NONCE_SALT',       'O@zv}+F6KlcArLHZ_uoC[Fw6]=13:49WD0uJBoPoeAUS,92eT+6)JRQA$MEpOOGc' );

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
