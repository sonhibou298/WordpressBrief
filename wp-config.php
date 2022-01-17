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
define( 'DB_NAME', 'wp_briefsimplon' );

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
define( 'AUTH_KEY',         '(-H,jzH6!#]~8],9JN=##gmH0]8599aRTk}sU#}3;#$$gh/m])rvQaGP!1GCP/[C' );
define( 'SECURE_AUTH_KEY',  '<*=-b#7}Y|ho764M<[uqGIe~}GwjL:Ln4FGbqa)q+.8kr|Zn5#,z(_pu&1DS>,Ep' );
define( 'LOGGED_IN_KEY',    'R8H.W/S3Q>+uL.fgy4`8D>Q>6d2A dEB<9/x,WM)2k%3%ZfY^HYO1-u(W$mC0M,!' );
define( 'NONCE_KEY',        '$0l0KnTVWu,R~@`NR8=F)EO7V5(P1&#l1Y_EoD}|i@NS@Q/@Q=J&Rq(hzrxvO.{O' );
define( 'AUTH_SALT',        'WSa[S[B2K-FpTtT9,(;wT,GVy9=F5_T?$5~VfZI9%~kZS,eS%_GId@B.J{j1q`hn' );
define( 'SECURE_AUTH_SALT', 'hM(p*M{V6CAAv&%F|ye+5)-hrb3^bSUKV[Cq:S8%*l(iV=.N(]GFz,-yY{M89R;e' );
define( 'LOGGED_IN_SALT',   'oMUNWE:X~2:Clu;ne;:8b}7= #h,lwoF/G?xP)QX>x]~6JajWYUu.FB5<j(Mx;vY' );
define( 'NONCE_SALT',       '.oce5`Rhi3KICCetULAc-$8kfdGU5%g(<8t#M*%]&9|AN{V{6eSL97tN10#zlyK$' );

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
