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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NkJ@wG+Is3kl^J=FF4Vln]LsOSOuzyugU$nkB9KaR}[V5IY_f[q*{?W&F.~eVg+J');
define('SECURE_AUTH_KEY',  '#Ee4fEL>!OKbE(4aVg(L=-Yz3l1t^RecX)zU)8Bxe*WHl)S+/[K#rg Yixb~J-p6');
define('LOGGED_IN_KEY',    '57f{]*rB1M8o*nTwovr_s9A_Fv6gtY k#`Iqtc+}zBOvmwQg#BBwo*dK!@e*^r{V');
define('NONCE_KEY',        'hc0[.u/x3dSvdJn/HG/Rb{m[g21M)`A$&VXg#:>GSXt!d$uY %ov:zY^Kmq3s?eY');
define('AUTH_SALT',        'd*=nqf$6xBxznH9gG_s.M4Gp66*_lh=}_taJtkw=5eJ#x0vF8Qx2K>!XcCZiJjYo');
define('SECURE_AUTH_SALT', 'ScE(XFd?LFX[?mWH.f[;OW`>|Gu6=rn{,_IE;!]4Bx8aJUB=<~~?E2QNram7n+jp');
define('LOGGED_IN_SALT',   '(qU*#H`LrHf<CP+IR{+ivo4Ys4)XGF>,]7C5khA{BD:TxSYe(:(Wb@2<_cz{-EEg');
define('NONCE_SALT',       '^2<dR1+Q]4yORX#ZKtVk=h#A2=L8MuZk$J.~r*x{ASLK4~z|LYA[W@jxsfo!G7-t');

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
