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
define( 'DB_NAME', 'test_wp_db' );

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
define( 'AUTH_KEY',         'O*C3c$ eWk0wrn%w]3U!US@FwzCnxw>D]i|}m$_2Z{eLQ]{rEF(e_ZLY^+K-OtTO' );
define( 'SECURE_AUTH_KEY',  'N||9Rs$vGPH$[?Ioe9~|,G2L^{%_k%n&eXY[M#*ld2nDD>$V$B*iQU-SclW[&l[=' );
define( 'LOGGED_IN_KEY',    '@%wi>!x@&VCHUQdGfXzYrrUh<>:Y;=v|Lg?NZ5bBEQX?F~BVS?#B5VJVzmjYC$w~' );
define( 'NONCE_KEY',        ',4f%Acteb[,</m?i<:~u*#A?*x5]jlau%UuVT;7`Z3-QD>HG-jo:Hl0)O*gp!~@.' );
define( 'AUTH_SALT',        'RTC-^6Kh~.]UOp~NCK{KM{)#a:Z![9h6#B`].2yhl}>-,DJR;d%)CaPPa;-<.{o{' );
define( 'SECURE_AUTH_SALT', 'YX?sR(<MQrf,-q,prV)O~Xj~eIXk|PgHo^Gab3]b:7%01sF*05|e&?SbipZ$S[5j' );
define( 'LOGGED_IN_SALT',   'Tz]6^{lak9k JT~%K155)d+XML!xMs/,5H e/4PMS@IC,]k_);&}LepP}qr|%-o!' );
define( 'NONCE_SALT',       'fL[Wjaubw2/Sl,+W#<+L%8L;hJx5DqzV.(OAR*ChuDL>T;c]{*&A9h/V)=)g3MDf' );

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
