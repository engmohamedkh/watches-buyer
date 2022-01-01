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
define( 'DB_NAME', 'watches' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'q+ k{CG3v4ZBiMp6&THAsNty%uj(uKe.8<L$(*Spj~&wkeBp|$CXQtjCZRCf-;eX' );
define( 'SECURE_AUTH_KEY',  'j<RS5@JO>[[JrB[N?S1R[up6=_$+mR4&WdmkusUb9nM*jw#r[3a0B6Wh>UC;`]%d' );
define( 'LOGGED_IN_KEY',    'mFNjue]ew#@~M_HUhGpnN+hPD(<Qx^%fl8S.g[IJR%&l3[G*m-uKBfn*R~/rrZR2' );
define( 'NONCE_KEY',        'iL[,]ZNKY_.|*-;CMbb{#!f*6S<K-Q0?MpK,wUiX+ekTkB1lfc%M`zL&7xw]I+,9' );
define( 'AUTH_SALT',        'ZhH<[(6Z!S[{CnbB;^Xf++{$r`1`A_{e:{#_&.eiV?;lx{6+e:.eXCXy>ZVc!<}*' );
define( 'SECURE_AUTH_SALT', 'ijfhC|d{I#ObNOnqE,[-%}&XO2(t:=_)mm`~*2DP,B}G<,1)B]+(:A yg?&A$Pxr' );
define( 'LOGGED_IN_SALT',   'I@,&w0-rV)cY[E[f;0ctiJ&(?mcu]d{Ov}O#/V~0GBF^ZOM+a:KDHR@Zf5ih8Zg<' );
define( 'NONCE_SALT',       '#nN[>_53poh7$WnFXC-sR,O2j1ptTo.T)T0N)Gnv/jA(Mw1M$FjIoq@g`Qdp.z=I' );

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
