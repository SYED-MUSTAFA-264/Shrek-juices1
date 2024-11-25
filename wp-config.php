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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'juice2406d' );

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
define( 'AUTH_KEY',         'ot~CSiw,Y9wk::0L`Axi7AJBrl+i|5u=s7&UCn5^wc!_h[Kp.p-tJQwnn8(?rCN;' );
define( 'SECURE_AUTH_KEY',  'n>,I}!R}CH;B[3<TEyt|vDBY_@d&>BKmu+/R1xS*3SbJENpa*c0,$3?-W6wI;$Hk' );
define( 'LOGGED_IN_KEY',    'Ie Yq):wV5UigIPeyZpqHxh9F$zohBwyL=&n8%ncQ_kpo3yjJx*FnP:$+#8~)yQs' );
define( 'NONCE_KEY',        'k2rzt`@Yy3I@[Z-x v%u;IGG@)oX!ILJY598*Er+kNzTdZX^LA4Gl]S-Izem2K0w' );
define( 'AUTH_SALT',        'g5Lv$roz$alg p3CmGQR:@auAH-]%($Zh]@+$fueEI3?R [eFfny/,)A/M0(Cb`P' );
define( 'SECURE_AUTH_SALT', 'kbMH1Y@*>ZAQ{AGV)oguX}LgBSEU;Hm<j.AI-|hBR^wna)ieyt>1yEr*V,u<+7?L' );
define( 'LOGGED_IN_SALT',   '#mDtm;vJgh}/[o%4PVFWls?Qm|`sKi_CG(ifX*gJ4$#Xkgy=H?KT0}#+#Rr eRA6' );
define( 'NONCE_SALT',       'ErJFbA{,l2ndd!dKqr>{799yB)Z~1Zv@N3vWLh_tZ<V?<miF(}FSH:Zv=!]/Es@,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
