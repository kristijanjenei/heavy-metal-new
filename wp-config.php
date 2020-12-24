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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_p1' );

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
define( 'AUTH_KEY',         '=pGSYtdYGZ*yqK?=kQLQ_eie?9+oD[HP@Y]4U[&Bzf%}aH6UNnWt3tJy>|/GMhf$' );
define( 'SECURE_AUTH_KEY',  'W(=*(N2D[FMupX!Q,G8C*}ncjdaK`!gW@XLRQ2#=.Tud0GKCU&P@ht{nXa}N_^;]' );
define( 'LOGGED_IN_KEY',    'Ltcid)v OX.XvIVgxB2B(h4F_}]gx?Hj+jR$U=.TVhNP;Wd5sr;VkRU][Bi?R|y4' );
define( 'NONCE_KEY',        '`K6+DmfQqH)v>v_mRrT%Vx);Z>>3PyV:TR~M`lL19CrHKU6j>Cy(1VN3=Yq;Aux4' );
define( 'AUTH_SALT',        'dQ^z/Bdu#SrQ45UVn|sl)yCV^j+@Inui],)+XL {*UvjBgy.3+@{V{CoD;Bh_o[#' );
define( 'SECURE_AUTH_SALT', 'DL2aJSMbbSZ5*eJn*G_F )c.5SQw3CHr{rtG[E$#A@uL}B|P[D+%q=s|l<{v4i-T' );
define( 'LOGGED_IN_SALT',   '*/pmXO/T vB_<B1?$.+ac6ZqAo=b4qjo{QPfdL7Jj)kZi<7~&)j#V:;68Z:=s1w$' );
define( 'NONCE_SALT',       '&EwbH0{(Rjs%+Z0e$N,S}vV1*_@zIcL86u1Dhy4FnKXEA3o+r[1iq~8NQ)]y8eU4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
