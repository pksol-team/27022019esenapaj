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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'japenese');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password changed */ 
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6Z3Q,#;9;otq0`<KLJ3!VrJ_Wb.H%>_*^@WZ^P3Thr:)L_6G??Q$x#)fosim@.Rm');
define('SECURE_AUTH_KEY',  'Ud~B%,+q$0E85r0`5iF-LNkw:wRaI1$h~dkeXInf!OjeI-ngwf|%35B==i/?.wo@');
define('LOGGED_IN_KEY',    'rJ*2aHx-a@Xo(RXt#;/explU+8j2;^?G5K<D}Y[N`q62![-LNB]3RjF V&(]VI+T');
define('NONCE_KEY',        ':hg{ k(l9v03KpzFyX@v!MK/^bS{+*&IhwXhMQZ?,WU^stH k.F~20;cd{}?_N|k');
define('AUTH_SALT',        'g4.A@=pIHCi+|kVgWQH/<JUAyCV)9=YE4^{>B>CHYtVS>2|<t.(g+4t@y*_ />7l');
define('SECURE_AUTH_SALT', 'Bizs5R}Q1v#FpVHp($Dxq<%aZ#n[DJ[&#1nx.aa .i9r9p_W7;(H-ZMqvk%b{{4G');
define('LOGGED_IN_SALT',   'T+?;@fl7mwWVR!jD&.kA^0^/8rmgII1{[zTlVItuv-eMz/To!q21`dWIrH|Hl>lt');
define('NONCE_SALT',       'ird,sFH9GJLT3$iw_<V}Y6{P X&DoX}VYkG&yt&=x|_Z_iuB+U[ro0K)+!SS8n`P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
