<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xmag_GS_i16z1' );

/** Database username */
define( 'DB_USER', 'xmag_GS_f29cz' );

/** Database password */
define( 'DB_PASSWORD', '_k6aNaWbMoWf~e19' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '22r7%)XY53u@~#f%75EYEH/Ee:#Ex]0MQX/_UR74Zax_wvE92GJ#11l2E8nD2G(w');
define('SECURE_AUTH_KEY', '_-Q0:UVYGUT-G:r~Y0Y78q_N!46[61_90r@1g93))V1%zI4leCg-~2nn_@5v[1Hp');
define('LOGGED_IN_KEY', '_7EfG)oBLG!2jW-4O;I#T+937991#fa36KNIeC0@JMP7h40855Gwyr1%sJ4R|A3*');
define('NONCE_KEY', 'Coh|JR9cO7G5G;19f4t!xel:n78cd5vZVMF/b55V@+16431ja@IN5J:zUK00k)PH');
define('AUTH_SALT', '~o(~!lzp3gIbmd16|U|28)/nQtGt1Dc38!r*~wt2Htgq[25]S7qOeuu*pF0#-y~9');
define('SECURE_AUTH_SALT', '@u7X(531%!-WNCow4)cqZSN5a3&Lf(+Gf9B/PWS21x|Dc!MiT]VQ:#L34iT/z)4w');
define('LOGGED_IN_SALT', ')/%i(*s0i[m(sh)OtU2@6K0wk0Rk-X5#-+5v6@6adHyIm2&F6cY7i951A[2nQ4&V');
define('NONCE_SALT', '3YH*Yz4z!MZs2w(6Dq;|G4KQoFV]OSDO#n)v5+5t5#c(Ld55EK@z6V%%XttMku9f');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1ugcK_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
