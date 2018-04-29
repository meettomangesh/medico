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
define('DB_NAME', 'medico');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>hAhpaWZVav[hX6_*Hi_6w?7Pi}20gt,_Wp?m.Y=RR+HrPz~X[B031UV/pUW`%2K');
define('SECURE_AUTH_KEY',  'K^:OEaBVVF`a3*h}<(J|,=pHM8mt9>=yCEw%czAz/utX/H3hg`QDIW/k;I^a/+|}');
define('LOGGED_IN_KEY',    'K*?QS[g`:-C_ks8u5te!R`s])?;St8tLihCE`*?KQgT4,6YH]Zcjn:tTRu@wBAsL');
define('NONCE_KEY',        '/pL:f0PW.WFG(!ou4G(5</~Ko*{uBy.wv>1{fH~fbI?ScM/IDZ*:Vr~K&PvB>K<2');
define('AUTH_SALT',        'F8e-({&FWs}*BjDpgEEkOKf-zPwV,@`yQU};2sU s*Yha8RM~*O~[_Gs*zvMr@?c');
define('SECURE_AUTH_SALT', '&:(lPJ@D~P.]4Q|.=m{|%i)>Be1$s^C}1jA#5t+I5#i%(zYr>Re}Ya|^Lq6|)p@?');
define('LOGGED_IN_SALT',   '(ok JG,4F89NVdNj|7(>En^{L.XM<x;yTQVh6H39=8crkU6X<:[`jZ4KS2?f?5R.');
define('NONCE_SALT',       '_!^cDMfHc8~;r3`l9a2h%GtGtq&D8_G(1?:>~-+_.RPjI}j:0#-qjKE)p.d>hpXh');

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
