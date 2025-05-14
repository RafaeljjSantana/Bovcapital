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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '-xVp8!B)g(Yo}%K4]:?<NoN[[DE=`h`e4#1kDa|jkb&lx*fry+Tqh1;+W])?RCGD' );
define( 'SECURE_AUTH_KEY',   'D[P1w9y5j[mD%4VpC},lon!b$1QU ;f}c,qP(h,fBBc9>Jj*4BF:xrMzK:_8yFbE' );
define( 'LOGGED_IN_KEY',     'y8ZE+s?v;xHhNs$3Xg[KVaiH-nP:f|avx!}zT}q*%3]r#W%fUL&TCB3I|DdoR:9Q' );
define( 'NONCE_KEY',         'H~cMt!z@;N),Xl{,By}9xqN]UB9#+*!KVf$oPD5%AJor=+%w|gmFfCoRKBt,8zvx' );
define( 'AUTH_SALT',         '/QPjE6N%M~d4959.@Gdi9[{U^Gt$@|+D&&i+m7c/~pE<{l1jd9U*dC:Bivskm*6;' );
define( 'SECURE_AUTH_SALT',  'x<N0wa#q7CVpLX-O{0(7}Sg5?FYxs%_7sqA&?|=Tg;4^DN_uvw`e%FR-c6J$BZNt' );
define( 'LOGGED_IN_SALT',    '+LauE[DcQk[<M}e%K^WkXlSa%5SCON!(6)C]XoN^am%)ldH3~=.a.i!)b]8!3Y!.' );
define( 'NONCE_SALT',        '>!&D*a|bC2?LlO*CK<yvb*:(FOsT3bd_%iz[ZxF@^iSDMQwIWFD-T#S&{7ah]}Ns' );
define( 'WP_CACHE_KEY_SALT', '3WA4uy=4yy}>=!j;zFxEKf`#+-X&w=Au|X4bbs}qnEboIU]-0jxTD*cU4a]u}KVQ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
