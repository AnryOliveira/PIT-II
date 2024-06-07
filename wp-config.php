<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cupcake' );

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
define( 'AUTH_KEY',         '6 7<33h0cIqV$jh5u8#y}LA<;Ad%&31eU;plzSOx*3Fge*8L!?b_B{^D(dSA3WNN' );
define( 'SECURE_AUTH_KEY',  '^+I&HQ<c@O8+fCVdH@tsI.C^8ffG,b}2Eh3QokoJvQ>6[[m P%2:u{KzY3@J#$Ws' );
define( 'LOGGED_IN_KEY',    'ZCI7)UTge1G<4ra#dA*a4^}>RpfiK_//`V-1)IT@5_MsLNq20gX&/ag;CN7DC8!e' );
define( 'NONCE_KEY',        '9{7 Fw/|_Nr;]|3e@T4Zlm*zaXP;pWk{9{h3Krg]USS9v8:9?M CU-HJ1Ov:tUxi' );
define( 'AUTH_SALT',        '^GO$8.z;:Gzw+V:yrs-(8=ZRdQBA/^4@5l-vIZE*YBC<<iD|m=T|Goid_=yd4aR[' );
define( 'SECURE_AUTH_SALT', ';Zh@/XwZbw2w)ETw?99WNQ+HS<W?-Y42H{Yb.[5TNI`Djx`#rBXq)C-)DLkhZwXV' );
define( 'LOGGED_IN_SALT',   'LT]neO8$?-IcqEIRjhlyrKRS|*6EP2og@:B6#jMTMvhSr{p8P`%tu{pDtMnPBMnW' );
define( 'NONCE_SALT',       '+(0!UM0Di%nPMP4C@V&7ro:=H/w@Dv#SqtzQ<?CU:YSd5q}--Cj^l!$i0&n.0QD>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
