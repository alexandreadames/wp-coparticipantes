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
// ** MySQL settings - You can get this info from your web host ** //
if (file_exists(dirname(__FILE__) . '/local.php')) {
	//Local database setting
	define('DB_NAME', 'wp-coparticipantes-db');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}
else {
	//Live database setting
	define('DB_NAME', 'alex5278_universitydata');
	define('DB_USER', 'alex5278_wp598');
	define('DB_PASSWORD', 'L5L^a6RXRfC0');
	define('DB_HOST', 'localhost');

}


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
define('AUTH_KEY',         'c7.!|jzt/g.tl.!h]d~W4iziY/~@1ED B?Z*tL[!;{ie(YBkn-&5>k2M!#c+9<{1');
define('SECURE_AUTH_KEY',  '8W4!s]RR|0e%W.jfu/r:6,$mw6?3v{#]_1T*j1ULsC6eGyY$oTlDh+;zA`u:F0|w');
define('LOGGED_IN_KEY',    'A0S15L+_c<OUg^{rb.3?O)HJube;<o%VYqikHbJd*uc4Icm?dzn&7l|ZJ$j >(2Y');
define('NONCE_KEY',        'n-S3  iDgAr[ge@=Y1h<:f3|oo#c:wESLUD)4o$2_EBNEwbx`Ub3!z}4~E>r3^D~');
define('AUTH_SALT',        'R3 He[oJG PIa#p]s8X@l`xX1I]-;yL<V4o&3ef]x E3~13_8{G<Yu&}{`69fLN:');
define('SECURE_AUTH_SALT', 'Ko,!Vpi-I2NZ]}hff)UlcYz^~(a^>iyS#J^}h0{tL?sGQ.NLB&[uxF_#3hpq[7e`');
define('LOGGED_IN_SALT',   'W22=i-2P5g5N`o7fZI[:vlVw]8Q&]EMbcwO84SUy5a?ldTiy9>7A_Cs~i~j<.>0M');
define('NONCE_SALT',       ':-{O3;vH:(iM7W,T5v;I(tMy(pz5CTs^W1y>LYMV<Gp9q.Q?X&dAeMG6o2!D3#El');

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
