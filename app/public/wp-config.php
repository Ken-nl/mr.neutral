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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ':JzLOZn^Dy!QCD,buF6fiKlJ-.w]0O&$JNWM?WLH9];z6N=)p[X-d,gFIN?BCzY?' );
define( 'SECURE_AUTH_KEY',   'Hd,8!vUq0]$)k#pwi>d9ji<$]t?ox*S<|knb0JHW_2}xU6U :I%ouTqHU9B$])77' );
define( 'LOGGED_IN_KEY',     '/;1j0q[{&e}wN1s<rG]*PGtrH7^Y0^wAx]j9b*[W/&sWx8}b|U0ZA]96U;=|>b6T' );
define( 'NONCE_KEY',         'Dq@B95;Jo2ayuzw/Jx4~:k2k([T/WpN(&e5=7o$`BoiSd-x8-`S< 6,smiu(S?#<' );
define( 'AUTH_SALT',         'Bm6Pwpv~|>:/,<G[6` %`.1TOK4k{B$v3zy @VYQ6wL3fDc~7*|~bv0~kpuC/_2_' );
define( 'SECURE_AUTH_SALT',  'K)>]^n&ne[LAy)4P3lxG pZ+Fdv4:8f</J3&!aWR[HCQtw2]X9} qB* <#uBruK}' );
define( 'LOGGED_IN_SALT',    '?4`xE.Q:@mB6{lJF8gSMQxk&_=_f#V$-cY8r|.#rVQ5s0MX_@F4{tT~3Q}4e1U[{' );
define( 'NONCE_SALT',        'JZr$)UXFC|VxcN.O_TLI B05Vh)xCe6r!w?_NnRaLzfAd[Cz${eeeX8.(j=lt=lB' );
define( 'WP_CACHE_KEY_SALT', '[)U%U^L1UR nC.d<vat@6{HuH80+QC<kN0_O7k/8!^9S:3U,LTSYxZmmS.Uyy($|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );

// ==== AI API Keys (Local dev) ====
define('OPENAI_API_KEY', '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');
define('GEMINI_API_KEY', 'AIzaSyBiVEYM_4KbbP8egjY1hkR_6oe74NLUseM');
// =================================


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
