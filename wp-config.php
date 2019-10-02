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
define( 'DB_NAME', 'tatumarendse_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l|BE$-fhvr*aJw8DK_JAc)X)J(C/;X7+RR(2?1i;DM|DDD}&%BV7Mk*O7QEx,L!r' );
define( 'SECURE_AUTH_KEY',  'oy)5H-)b%{>77DcW/0e{H2tA[(Bt9f>W#$.e4Fh6,YX|}x,!(~W h,tS%v,g%Mea' );
define( 'LOGGED_IN_KEY',    'E%<AzFz5oadGJJ7RMXPZxtb a2Dxi1m`GM*wT Ez1KZ-N|ZdXink{s!pH?ZB`w&=' );
define( 'NONCE_KEY',        '9oaJ[WSiG),^;A(Z13tlui|q9kr<6:=0J/Xaj3*q47AOi[$NdL[.VHM/[?x/^.,}' );
define( 'AUTH_SALT',        'jpx/#t3C{&+`WhZWPP?+1`4HB!%S(<|GSDBC* 6hD+9DsO@U4w4bY<;:c&4.-l}2' );
define( 'SECURE_AUTH_SALT', '(LJ>W&s1?YMxb_3lEsq~/0WaJV{q71ROEsU_^Wmm={UG?jN}QOa+7Fuq=2&[/%Go' );
define( 'LOGGED_IN_SALT',   'Wo=0#H-w/}tOF>ge6x>w0,!%ntJxbU=b0<P3TA[+J)FhVLe6CpPYlc0~zw*G0.dS' );
define( 'NONCE_SALT',       '@T]SK9/ACX2]KJ}LA$ji+2QvCGL:~^-g]}LX@=.c9k+>bRd8vqS.>QKcuP-`l3m<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
