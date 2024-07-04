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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'an_la_ban' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_boWR%+WS,ODcrojQ},7~a|70&9~PGP,,2+u  2Ny9*A3|&n$6`e8G7/bo~;T/Q6' );
define( 'SECURE_AUTH_KEY',  '`C-5&wNr2SJ6/[@qP/*1vh,R^0Tu^Z$dVGqE!M6M~9Y923v4tql}N9Ch1;SW78g ' );
define( 'LOGGED_IN_KEY',    '|E{G v1L@-/]gX)TpJqNs2=SPvRvZ0lKD!KPCYGb%/1Ja-xz!ejM<j0L&Eh4.S|E' );
define( 'NONCE_KEY',        'q5&Hd94-fi=$zFOFBfH >5|W*qQ GJX{V`p`JPu7b@Wlz$3B-~OY?y9HHFhFQ#eN' );
define( 'AUTH_SALT',        '06DDp9E2XK1~LL8T1<0Y&$w+]cADP4n3x8Xdb;}!YEgM{M@kHL;w73fALbI:XcyF' );
define( 'SECURE_AUTH_SALT', 'D3~6S9sDQE]yk>w_L, `jdYbBE7fWe~D|3oAqlc>1Tw/hLW&5U6ZRxmLv]B~*zOR' );
define( 'LOGGED_IN_SALT',   '0]iLH}?(+{-r^YDf,AuqB|y(,pp+RI-?L$(b~U9_:V[vWiZ?a^aui#>00}6aiB&N' );
define( 'NONCE_SALT',       '<@LfZDrA.^cwJdJ;+gDQD-~dJl^gas< k[aKN]Hctww3}I9E,,V`Qnf!>Q6Y6:H]' );

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
