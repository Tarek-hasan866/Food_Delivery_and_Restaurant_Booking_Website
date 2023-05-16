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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site6' );

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
define( 'AUTH_KEY',         '&E1|evp{SAyN6}Sjg;bEldQ#sjyWB).A`l5jW{&Y[YIwd)7qKLu=fv$:4]m9iIoo' );
define( 'SECURE_AUTH_KEY',  '@i8tP|4zpXW]kW- 42IBs1Yw*j?<ImdptmEG$X>!jWhnE(/o<V_!fL}Rmh/DeM5D' );
define( 'LOGGED_IN_KEY',    'mWc&c@E2uU9G{xn@BJN3+XSclD;qyZ0i!wQ^Gxq_L 8WTO0|JSUZQ$/[t>H6)T0j' );
define( 'NONCE_KEY',        'LrKLIt9k9GaoHdd.fm=W#J~~m-lxYf=9+U#/Q4W.rD21!uWypQP ]E[A2S!}q]%@' );
define( 'AUTH_SALT',        '=83noCFg&rfT{%f}yLE*YjMq]MW]c,180OQ5yG-1|%@(4h`0`2/7`asX9Q+e3#>J' );
define( 'SECURE_AUTH_SALT', 'Dv**nM!eK3>&)Q :# 80%@k_=I]pR*ja%Nk>{PS|SH4qQ;^bbkS3)OL.~R|`9sM(' );
define( 'LOGGED_IN_SALT',   'k {;/eYw$[7<Mo|&C}Np,zb.z_QKg>S]gsD9JP|Y.bqEv_6rCAuV?lG|i+dC`p).' );
define( 'NONCE_SALT',       'jh=`RoP`]13`q5mXq-@i|1XrV-c@fIMc&9hwSbxMfNV.A<VGfc%,xJ@o%4@!wbl^' );

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
