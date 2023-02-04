<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u590566464_UtU2K' );

/** Database username */
define( 'DB_USER', 'u590566464_ARam1' );

/** Database password */
define( 'DB_PASSWORD', '23tyHjF1R1' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3dJ7bJAH408>eRa^bQb:+f(:frG9],?*}Q*b[~(/:,E35P#x+>c$t+i;a0_FqsFy' );
define( 'SECURE_AUTH_KEY',   't|{;!6JiIe/B2YYO43|NWqPik8NW_C+1Rh8|Hw%hB(v9!Jo=3~Yb$7u,vFcm?O4`' );
define( 'LOGGED_IN_KEY',     'Fn(|!4<&h~%)oyK_(b4)$~51X9m#^]h50uq-E54c#@#0UTJp[-l@4^j:DlcMoEhu' );
define( 'NONCE_KEY',         'a{uV[N2b-5s-lR?qbM,N~ENR,!nw,M?|q3c%}ZvU,$8Xkj(c#;dfq9=Cu+sy<&A<' );
define( 'AUTH_SALT',         'lzq6@y,L6/=x$5w{ya]}d+,2Z=F)~!GK@F)3w@bN&/E$$6azm8M>2CS{H.?htMJj' );
define( 'SECURE_AUTH_SALT',  'Xr6@>&*RA4p@>GwSz$WPEcDPw3Of}}hf_!|Lhc$Wf=Iti*)YN!HDtRQ-G{x5o: 5' );
define( 'LOGGED_IN_SALT',    'Zd3bYno9GQeS`~&>=idd1,3_.sbX7hhBqO>8_6vQhq~$)T- G8u|?Cf)XEL .By#' );
define( 'NONCE_SALT',        'd?16x]_eRExNNEkinAD]f33XX:[s)2KPBP][6h@^GMV|;iIOyp|15-ixb.),s0bH' );
define( 'WP_CACHE_KEY_SALT', 'q#F_HH}>4(cvxyrYRwE^y<NE`8x-<,hO6)fAe@sDFf%$-S!(MI1~VUofG_I@Y#*t' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
