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
define('DB_NAME', 'whitelight');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0%ORb=+Ejg?+Zr0meF[gsHs,v7W(O!LhhvRz7~&U@Kqe4)alO{1v^r6=QOCXwO1C');
define('SECURE_AUTH_KEY',  'EP?WE<dSYynPE8oL~[I;A%W5?wTH2y<Rg!-}I):k+}Gy~@wLY!*ZhD},H~>a_ac)');
define('LOGGED_IN_KEY',    '2/=oD{@u*18~9:MKgZ|J8BeH_=`X*d5H_%00D.l!}VE9ih((-/5)4[R8.F5o7H`k');
define('NONCE_KEY',        'SMRyBv_G?O/t!HF=$IT|o7ol-!U9Xs2Io+{sU`-kSIA!4IDTfm<}8>|JEuNjhZ2Z');
define('AUTH_SALT',        'D j<e.Y`s$j!Q,X9pb7<b[o>cGpif@m3=Eq3!.E iS)YW~5Q#}2)m*h`^noX>l(:');
define('SECURE_AUTH_SALT', 'vIyd`Ne$47bWrc<wZ`IS]JgKF,VtAY#vOtiQ^/;|?MOi?aFdGp/FfU6Le::Q|DwO');
define('LOGGED_IN_SALT',   '4M*n,cOUowcPZdmKj|4)r_!`66nsl/n)e)<gI AW*urA/,KV)v~+aFUUrbY>bmGg');
define('NONCE_SALT',       'jz3R~SSXs>_M/O;ew%]^9*5+W~vNj>?(9Xu[N&iT4Xxh-W%PTKedJDI6%X90Mosr');

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
