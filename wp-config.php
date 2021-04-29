<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'totalcomputers_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' t[G *C5llC~[s@W%I N?2WoTYFFJUGm&=8#eH/{?*G_0L%; ]p[Id{Ql8T/>OyP' );
define( 'SECURE_AUTH_KEY',  '$/hmjEW$NW T!)6u/%[yV9aVL2@6b7 G52uXT{}!E&{gru0+.2,9fZp8d Jh,o&5' );
define( 'LOGGED_IN_KEY',    '{!59^6P $sV]RyT6&AW`4r VJwDL/[Lz*S_XZHdM]6EfGfrM;,|!gC6BBA99Yuf2' );
define( 'NONCE_KEY',        'w?fknK+bLgO@>F-[r>|2Q.[~DNf$(sCz4R8m5f&~u{R~)16EbqCZ5;70k/mO//YC' );
define( 'AUTH_SALT',        'XK~4-6$1Bf1JF@uxz&Lyd^19jW Al0,fyvHoSodJQxG$*Gk3,/T`9/:u_tz5O7cn' );
define( 'SECURE_AUTH_SALT', 'j,{=;95,N-EokA&#63jH>T-agA[a7PSa1;``M,Hbv>g;%L8H(41{+m+TzE~e^}2I' );
define( 'LOGGED_IN_SALT',   'D&Z=>a7_+~k#>3#En^ZB@%9kaKSQs%o&lzh_BU|H_)7O=FFA&4yz!}pcKj,ROYVa' );
define( 'NONCE_SALT',       '?$El:DfBx.G[Qg&Sxpk[)1ZPC,`R$]<iwWKp#&|dP0F7~%?&OEW|4:dC)Ret4*j}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
