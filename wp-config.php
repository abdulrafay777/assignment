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
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         'yasfJF:B,W{n1;m-[.0udjsH/V%)W|{4KX_5FY43j4gZjpKw@w ~6O<I!r+?[bU9' );
define( 'SECURE_AUTH_KEY',  '7Ja>73L#X5Q[M2Q7))Ybgx^[G{xI}B7>rgC<FuQ1,/Ab O*%%@nAT:mmI&BFl]^Y' );
define( 'LOGGED_IN_KEY',    '*~gdaMQMdCHz=.IEx)|_ wo|g2+<d=|iTHBx(I(WuJ)F-*e21y%>E;!C9[O>l>fo' );
define( 'NONCE_KEY',        '=9fd%Oi!ijSn_J)Eb$%@;S5zyn30w8P{T0Rv+lFpO2Xx*}pnzxA:?CDjW.<k|!V#' );
define( 'AUTH_SALT',        'ObPyd?*uq/l.R&HND1;UsT)RB+-8RHnm)%dZ(PhQ*u(3Jc.&:g];%#6V$P8P<B[(' );
define( 'SECURE_AUTH_SALT', '3bMHX]lCZ~;Dv$:wG20io$uQ%T5h=Lcwvm-v2[/tnp866W9*||xSaE*^swESH8l=' );
define( 'LOGGED_IN_SALT',   '%NtqU6501&8~xWQeB][644?D>Pt~U#Fq-xQSF4uI4kQ4f,vX3]4L5<M1.1Zfh9r&' );
define( 'NONCE_SALT',       '%nmc2|KH]7Km[2f@YyCYBT(yqeVRFLECl2k4v},$iaBK.4lpd:QeQ_n6J]3LEcP>' );

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
