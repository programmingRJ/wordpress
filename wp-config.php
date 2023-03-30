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
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         'RegcVG-W!V}GJq1EHK.er$Tyy78GHtH{+ %@tWUX`U%K$bja]Z;G`>CcR/-mD:u8' );
define( 'SECURE_AUTH_KEY',  'F&2^N#y~wnUMP1S#M|wNcu+&/j$^(:_qd5j0i@W,5:5Kv/^eTn(uKy<X;!A<1UmH' );
define( 'LOGGED_IN_KEY',    ':>*|P?<4!g1Glk3CM56!=MG=iL~?[O^N/CC]Ih;)uB_N7svw9F|)c,,*vA?zL>^K' );
define( 'NONCE_KEY',        '/&3omNf<S7r}3RO]B`PK8}MFq%)Nlz,> ]P_^9wKjNw,:C<${%zQ99O-DklHn$qK' );
define( 'AUTH_SALT',        ':|k?(RBQ=GP -bepAz_(QvjMR2d.B<O%H[6?VP.*5-6_d415_$SA^-jkb^/iOuaK' );
define( 'SECURE_AUTH_SALT', 'I@bgy<jj.#}!/tSOU,Ne`Z.BmH1jGKedFz)(>a!) oy=Ie e?&SSa!/SV9<a_+^,' );
define( 'LOGGED_IN_SALT',   'I%>yE,eF^T?W6sc6T:WS|uEcl=i/iQqo&UM))Da$=ZF-9jwG[-Hdq>uT&)0[Gv+&' );
define( 'NONCE_SALT',       '(/RI98 u&#6HL@ZNRkQP|YOc4V>n^Bx)UNP0R}(@MF5i!FP+e$E|5 0)7Uv:@-#Y' );

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
