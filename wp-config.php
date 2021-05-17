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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ibdoma_db' );

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
define( 'AUTH_KEY',         '}rM=yo]&?b?w|H72WGA0JH:WE{yWSY|d/o.rlW^*DkoIHm%I%aI2_(&x89N7<`p+' );
define( 'SECURE_AUTH_KEY',  'l^l0fP,?*NF]+|v${O*$:p(HbO=|(3zPW&opUA:.a}9,DM?X#(6y^FFI t7-8PsD' );
define( 'LOGGED_IN_KEY',    'LG8x)VXMJ&8dQ_K[_+,v~Jg7!3K1a?o8eU+;@tITuM]A2QRBT<p^ewfdQ|}uzV_/' );
define( 'NONCE_KEY',        'VGjQ^zXcO`YKk)2N}ITg|7{?4pjzK&@DMUiV9_Lc^)xJhWrqz>f?r9#t^|6#w#]]' );
define( 'AUTH_SALT',        'buS5ab4{RTlMNkK?B#dsI&4%]mTF04&iKbC%; =z@1)FFzW@Qm2B<X`EE1z/P>^f' );
define( 'SECURE_AUTH_SALT', 'SwG<Xv?h`(&P{klJdC;q.q]RfHY-[z}Tv*#Gc8Kv,_Lk[k2#>,`PJ7@/`8w_@mc?' );
define( 'LOGGED_IN_SALT',   '>6t8Peb()`LK)s#xJ_FW{ymM#SzC5|P+Uq#+RLv{(aiX.%<JRDc==$$k7Wxi4*Qw' );
define( 'NONCE_SALT',       'bj3d?g:/%|[ma.eF ;HU{QUW;0A.S_w 97.D_`7GZ*S6*3J~_OIqR*a)%kB/NogA' );

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
