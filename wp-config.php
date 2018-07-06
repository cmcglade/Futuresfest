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
define('DB_NAME', 'Futuresfest');

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
define('AUTH_KEY',         ';caVkmUb.k+1lFuu4aL<;(tG=FPzE 3Ox-?CA0<orn/ayh-Qw`820{1?k*.<2;a@');
define('SECURE_AUTH_KEY',  'LKz)]FPj9hA8oOu|(5{ri7:,wIT}C.gjg*8ta-[v11Z%]Q|H4}{_G573Z5X0U2KV');
define('LOGGED_IN_KEY',    'DKy*aIt` LhCwY4B%v-F*$3OUicrX?qO}~)on{KPXySc$qL>S}dTO~fgE?{kgFyj');
define('NONCE_KEY',        'RqF7Qzjn^}lH{dK:4HRo~(~S4Y#)J>0:dRjV4(r(QPg};E|9,MpG2>D6h%Q9C0,O');
define('AUTH_SALT',        's!k*DwJ /?z~>z5<{B55^XoqfD?~N+}zy`L|!NA%7vMR5)F!=eGuYL+#wf$Fl#N}');
define('SECURE_AUTH_SALT', 'z[3UhOQ+v=.O+]/wMRVJm8ef 88BM&+hCIjA[&8$CM,<?NwXT%;l}Eap.z;;, =I');
define('LOGGED_IN_SALT',   'kgOGTqEIsF6|lO{SA*kP-2ex,t:7o{Oj$kwZtue$7yoUFcNAPUs#nENsk`v)Q+oS');
define('NONCE_SALT',       'E(o@gxc1bn$uY=?5hQ4g6(YK<RRcz(V#A6F&=HSs+/oRpB(MK3b!$>:bMx:a!PzK');

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
