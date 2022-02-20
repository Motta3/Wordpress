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
define( 'DB_NAME', 'desafio' );

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
define( 'AUTH_KEY',         'S=~eRX1)LU,fPTZZRF-[_J1O*6S/oLuy8!fM{`2a~4fw;(U.d[g:}2L1$9sOAxQ!' );
define( 'SECURE_AUTH_KEY',  'ydR!F8a++kpF}-G`P+I4{i1@*t2k,fI~&K5izh-kqBJS5hA}hGxfus.G*kSY(:d5' );
define( 'LOGGED_IN_KEY',    '6|tYfB6PzoxV;Mxr[ IGmAoxvPFHz;wLhQ~l{ABFS3t5g1%W},#uXC@B&5WbZN:<' );
define( 'NONCE_KEY',        'DwNj@l6Tx5W*E1n5tm6BuZBvWHwQq]d]2R!K>(6y}<Oc`&f9oN@|RGi~(zV5IE{ ' );
define( 'AUTH_SALT',        'dpf.sY;IEpe1c41u&pQYlI1(jZj+mIs9HuH+@!F[+GSu){ya](rWN5/-xV4XF+:t' );
define( 'SECURE_AUTH_SALT', 'k*!KlH0+2VK51&;pzlBs/aWd}w1N(.n6~/rqwx$2|vwd:;?c,9=Smydi.&Qr1CLa' );
define( 'LOGGED_IN_SALT',   'sS7{FtNUgR1WJQ(o,6H%Q?QxxCTsBV{e;@zWM>S3r5fIcwmp&rng_?uqj/~502xL' );
define( 'NONCE_SALT',       '0Z^<c.3[3L:qJjb|]6t]R} ?KS^Xrg?j j/>o{A#w$Kw@]Y8j]6Qnq$@EB0C_PM]' );

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
