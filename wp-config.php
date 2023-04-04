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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q.ZnGrAp9h|ZR2wU*V/mM+aCGH,]1i9| cNc-?QXe`|Bc#EOk0wPUBF l>oB;n ;' );
define( 'SECURE_AUTH_KEY',  'NmJ1QtFkt>HJx>kgE%*u8k3;7& YCx| p^p_7&ryy?=E6b`L%ENX;4>#]o=(/:+x' );
define( 'LOGGED_IN_KEY',    '?]S@_nB(*_8m|5Z5nYWr2%0HqT4O@n>7Mv|MQw~(+U6-~n2ZF-=)#d?S8]a=f{Xl' );
define( 'NONCE_KEY',        'r/(gr_xoYK6tL+ews:?32<qP-o6fFv[R7R/0gvK-vr@W)$;@s225TQ$])Gec%CSr' );
define( 'AUTH_SALT',        'Kr!Bx!2[`5|,8>k`X_|<!/E/G`rVy1!i1#dPy7yU~HXA=hq~:U ?/kENylV,q5&r' );
define( 'SECURE_AUTH_SALT', 'ux<Y9`[d[wx(hGJbc8OK6(6FB|q/%vtP,[<N~v7$D6Y]T)*iQf]jkfNd6*D$Wj1k' );
define( 'LOGGED_IN_SALT',   'V!QY0B?&UzG]aP_]4{)^)>hR1$O.~U5?pxd//BO2+NRv!+N/|)r{m)6XW1h]|]X*' );
define( 'NONCE_SALT',       '9%OBBbp$GYjs{)6uCw|cqcmJrx)XtvP7p77M+(7@_pms+;yD{70tRhf>[m^_^ P%' );

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
