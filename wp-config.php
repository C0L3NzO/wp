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
define('DB_NAME', 'kasparja_wp');

/** MySQL database username */
define('DB_USER', 'kasparjakobson');

/** MySQL database password */
define('DB_PASSWORD', 'yUfTGU7Qb9fU');

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
define('AUTH_KEY',         'JeJ!<(kpRlvOjb0+1I&uZ^D]9H1m)3[Unr4qPvv($_n~e9qQ=VC3uD)h@<1rnPH9');
define('SECURE_AUTH_KEY',  '(%9NJ9oW3k)3b7`ySce&/RP15P)83dv7g9;!LT=~nY0pxBQAYQ^JxP_pJ@yimb[%');
define('LOGGED_IN_KEY',    'j]yYFm)E=Z[g(fw]!$Snq>;-o}>M!s%Nk_PxUK27K9$DHMIb^Y^{$l^j0IJD<d*N');
define('NONCE_KEY',        ':7,; K(3nzw{*/(2h:*N<zG+faQ{1crf`?=,|!{Bgb~+M,1vwY_[))@|N#nRT?Mx');
define('AUTH_SALT',        '{vHSaXSvl/V:8m</S{7?&;+*yn}MS9JX~<V(RP9#<3($h?{{a~Ths8&zlGo/h){v');
define('SECURE_AUTH_SALT', ')I:3T-ZH3$fE)N@33{S6Fy&A^Q]zrHT$6sE&Oz&=GA.CuFi`m~uO@uu?XcgXp?2T');
define('LOGGED_IN_SALT',   '}G;y7xbZE+jh@vxI`b}klhXnuY+MKe-{Z{3V2wgl$Ff3ZWs*5MEq{tUD#|vb3~JP');
define('NONCE_SALT',       'd|)|vre@@>KAh7lf@Nm,zFhOK;w,Js7V^5{}E_a>I9o)p/HnN)v4c7`vGclo$#er');

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
