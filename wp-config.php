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
define('DB_NAME', 'eos');

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
define('AUTH_KEY',         ':cH~4fmCZ*umla8;DUS74a]Kj#xTexTPQ,q4gO2IT=<Hx}<. $SLuT8*!~K&Q!bj');
define('SECURE_AUTH_KEY',  'oEfrhZEN.}I@#[-bnG:]UyT@TJYLRd`g&j>Qvap1tLeL78~u`E+ykNVwyMN7^uoz');
define('LOGGED_IN_KEY',    's0g!/E^#9)#4I><;M^7H)0IhLV`{SY#0/(1<8$>&Rf86xsX|aFctEd|XuxvuYP%3');
define('NONCE_KEY',        '&})lqRTNmQ9u9ut+a2FwEp me$)T9(lLO3,RA<6Aq{2Sprc*[{Qz=el7IG*pp:91');
define('AUTH_SALT',        'GjyT[@(#sTw*/|UpBV9116~*?Z2B$&5phV&%W}exoZN[oMX0OJ{sx4Qn<|c&zmMo');
define('SECURE_AUTH_SALT', 'a-E3PH<Be 2hWy14n<Ihu)oC|[$y@`65^V8SIfsZCmU3lDimO`T=2)d?FU0u|@vB');
define('LOGGED_IN_SALT',   'BMb;VjD<}]LjQh X% *4g-kna[[@VvH4--h0[%@z8a^Xs/,9Fq[?8* [M_([5M|C');
define('NONCE_SALT',       'UqZmx-O}zY .[,:}2LfSKQ{q;/OmV4[DR5e8Et&Y2Z<U?G@Xm97LTGX)q->8/~04');

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
