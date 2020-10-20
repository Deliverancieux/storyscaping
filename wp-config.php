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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storyscaping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Vc78#PN9#EQ^4v8eNjG~u}t0G}_K7Sos~=TncAYF%$l+{ZPxfor:DMkk8};,TBeJ');
define('SECURE_AUTH_KEY',  'Em8,i]Z!Ba8tZW-ibEyEa)nYKIcev[l{^[)18#ABR9?dkSY.*yW2WRCF|q>8P|2u');
define('LOGGED_IN_KEY',    'r-go,-c~6I7@43n*8T42VO|GOa@_$HwkvGV[1M_-(z5u^#AY]Iq=x80ZL21-d :q');
define('NONCE_KEY',        '-I]#i-K&W71XR-V$S<p00Z|%pc[T{!!oDTN[Mmew-mcJugWX]c_%~< c_>*FRw<A');
define('AUTH_SALT',        '{YySR#0V/@^SaW>p=3GH9@Y[4^<J*mG#+|yjH}2]i.K,WR&q8bkvF^IWArrR/do!');
define('SECURE_AUTH_SALT', 'Ou[-SnQ5(p>$s9WHu9>4-w#nbx|VohJ2eCW]7CN7|CEH)b= 8g;P%.sl.*0||Y/3');
define('LOGGED_IN_SALT',   '-|;8h^8X,kc]E/ygy#$IJApl5G~,!a7CwgTm^bU~Q>~?mF z-xdPJoNmuq5!z+c^');
define('NONCE_SALT',       'D>?)aOX.n rMUG-$qe7Fy`aLObVg+^s|Kp|i/i-qM,uD(|`Ss!y|JFatKdeqFUso');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsc_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
