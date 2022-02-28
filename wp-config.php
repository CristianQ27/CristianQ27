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
define( 'DB_NAME', 'gamebenchdb' );

/** MySQL database username */
define( 'DB_USER', 'cquezada' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PF8h-u3w]*E4Q4KY' );

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
define( 'AUTH_KEY',         '}BW:pfEn$J_y06TNT&d?{B5|zHDZ3xg&Wtz|6c*8[S&2PvQQJG@ii),@j93cs}%?' );
define( 'SECURE_AUTH_KEY',  '8/r>(Y,1WUoSiR}wBNRow?oi5vg$77LZBrvqAry)~uJRy$&#pM/Muxa/goS[k^,>' );
define( 'LOGGED_IN_KEY',    'Tw<VvpswAY~5(W`QIE9-?S=]=V2U~m{auEN*O6X=HA2X-Q/5a$DXXSF|E5eScS8i' );
define( 'NONCE_KEY',        '@*54(!(TX,_UN/9We5pQ7TDf_{<A9 >5Ry@X)RD!.Gc,PSPJo_z;n)N6~S.(XX Y' );
define( 'AUTH_SALT',        '(CLIai Qj Kyj*}?]]xJ[F`L8?N]5zZ<25YY^aUB@yyeXTd:v0Y#lq9e:ptKt8%R' );
define( 'SECURE_AUTH_SALT', 'nHh#D<5xO|B(,~HTi{jW(i0ad>N-,.J:|PP@PhTsDIS|^_R*S/I7%:Ds+_>)Xd!X' );
define( 'LOGGED_IN_SALT',   '/qiTELh-%5!VD!B?Q69t)T?NiVnWx4l20uKSS|-!}?)31Ao+ojJ*eV/uA;T[xz&k' );
define( 'NONCE_SALT',       'K:A[Xk&:*o)b=MbBc9GI #4A{F{j!-n,T9{IqM&Zk.,A#*./z;%R8I (M-j/Y1E*' );

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
