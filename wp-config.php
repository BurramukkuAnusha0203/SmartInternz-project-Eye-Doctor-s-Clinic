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
define( 'AUTH_KEY',         'Dt~q#75XYUN`oCu<LIIV_UA|Yoj;}q_|!>=Qk3]z6D~>:W>H.JavQ;2_.7+yTIRj' );
define( 'SECURE_AUTH_KEY',  'jysv{.UHbc.]#3.O/$g2t@Ncp+DKKF3mIlb]&*{g):00jG@XMNWgG&yoP*T[M9z-' );
define( 'LOGGED_IN_KEY',    'tRZU/-7T=b;|?D%[cl-z4`ThFt[]/ONtM+{IC-2b+vOCT45^`[B8#)L69KefXHSX' );
define( 'NONCE_KEY',        '7DYZAte>3gYw9?$7c39l^^=R`)=|GcD$U>IL|$f&S<d*SB?VO.y;t5H-}Mfpvaqa' );
define( 'AUTH_SALT',        '1zCS!DbYtnIBct6my{EY.W!R IasNhpZ9p]:Oj2!RsX8BMW7%P_[XH>p@Ts>SHd5' );
define( 'SECURE_AUTH_SALT', '#hRE{|ct-db(EVh3+g=~0Y#HelWaAD6&cC[zeRmFY|vXn}Z>LX!8z(8p~_EfSeOW' );
define( 'LOGGED_IN_SALT',   'tI5Qe./4z+P]-({L~wtjZdO`{deb0@4w>#ezPgsi;#vZ|#P2)nDv9kGABL%+Z.+.' );
define( 'NONCE_SALT',       '^Uz5{v0)O/}^sSC:{Utap VBpKre K[6OA-Q-fX9?upp+>Ht}Pe85IgaCnW@Aq=V' );

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
