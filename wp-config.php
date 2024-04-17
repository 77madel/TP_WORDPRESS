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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ':[,v4H^/:gwqY[Aj00si@$xm/K,%${(Ulmq,-lvRwT4@!CJ{B,C~65hJT~Q!uO#_' );
define( 'SECURE_AUTH_KEY',  'rT2-[cQd_))k;kpI+z(_U^j^>%u#aVB5kAx}L:r.$4oz,nkA1LsT076K>Ya%f ^1' );
define( 'LOGGED_IN_KEY',    'Qj>h!DiK=o]uR$%VrUlfF.X_zTT[pS3<>P=1Jv)3*g]457Fo60BbAv4I6orAt(cj' );
define( 'NONCE_KEY',        '`,`R4UvW{[iw,-vTf2xa|F}U};y-8R S =TNewTIs1n#Ogv3Lk xHallTLt<83~d' );
define( 'AUTH_SALT',        'dcSSbN]ztM:;R$SB6H*Hkt5h)r~&&wqnHNO_}d{7fKcx9a|NBu6|k_Ighmf t3z/' );
define( 'SECURE_AUTH_SALT', '-0%-3M$ochaYq{WeJV[?&y#vP.%9SR]hoc87AV4Xg(S@A&EO~>(2G3wZ#jqz`b0P' );
define( 'LOGGED_IN_SALT',   '|)EUJ&%k4p$$n&x]u(5UomX<iO}|2>G#pmQN&5Envlh`_TfL+AB*D9OqC=QJvA9w' );
define( 'NONCE_SALT',       '}i&lv4#`0.zzH% 9]Kz|TX#Pbk^/[2:NeUu6zR+;R6F[1=9CbUc&u8cl]w*_Ni$b' );

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
