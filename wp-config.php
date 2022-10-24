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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Y80R5i8xUKa}2lJ -p.V{i^USOQHBdsse/byh(Ch$GQlaU~Ng~.MC$/>x,M}kK?<' );
define( 'SECURE_AUTH_KEY',  '-xMxUc]b<1)`KUCpNz(2ZHr]@_ TW1rk.{E_V:8CnZV [oHiPRVJUGR-gV?c{R!:' );
define( 'LOGGED_IN_KEY',    'V2cRrv|Y&flYR4N7cCoL$Yxy{8(7cqf8I%AHTo%52:_Z`5k>:Q%~<OS6x86c$Ys>' );
define( 'NONCE_KEY',        'Qgg!C??B=2ZZkjPL2D.4NS7p6e%}.0o]L7&[!=;H)>E09Qjku@rwYY,?GR%hE;C#' );
define( 'AUTH_SALT',        'qd4l|Em@eM$fXaU|Pl,`vO~6sLAAK9.iuB$vHLE+R*yw>BaS|R2cO00T1veAy2}y' );
define( 'SECURE_AUTH_SALT', '&je0N1-EoDGhSTCD]5t+sYFPCP+{J`ebA$j~#oQut5V?eEG4SCFxA/.it,-(<E3C' );
define( 'LOGGED_IN_SALT',   'Vc[-b&ScjG/(NuzxPG:({THC?19U!;4Rcc#]jZfaF^&Bd/4YvUbIp=#KjFgS?B~}' );
define( 'NONCE_SALT',       '(fo=Ru8bH&ZRJ/d*ia!G=(E6Kju)$H,4#>1w],!C[Y?=2nqV&_]s(6q9]qifD Vu' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
