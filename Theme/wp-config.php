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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')7o.1~IEC-PZ(3lTO;{IYT{3-yv]g}}>VsBySCCU6|3yHhEUV:DjN~>]>0+~5iqF' );
define( 'SECURE_AUTH_KEY',  'a$f[x6bz4u;4fQk);hOF2/1iP}>+$N&DwPe$8uengr-K-QX(_Y<LQ.-t`Ca1q2S`' );
define( 'LOGGED_IN_KEY',    'h0yw:,?bhl`d%cA1yk=QloIr7?&/}UnScr^UWlO)g)[N?~kZ.-+xnn/eGX:~(;(c' );
define( 'NONCE_KEY',        'NsB{$;Y jdkLe)FAjV!`iSnz:|}tc?o)3?pw.h`9C_)-X]d@*hRlszpCoP_tOZ0P' );
define( 'AUTH_SALT',        'Rip-UpEzwe!XS!);q{/n^.]O,#zDgs=+UF*:tp1xRitXD2U*sgffY4Z-OozOEW&f' );
define( 'SECURE_AUTH_SALT', '2[M(]EE4zfkwpvr,(zkQZ.gL+~yXHg{ek MzWaC&YE=VVwG`9]Hdk@1,?+T%Y+0S' );
define( 'LOGGED_IN_SALT',   'VK7gI}lqD%n`PMy?^(X,Q7GOg>o=zQ^fB76E;OAo:?@`JY<f`LviJ-]#bRkj0NFc' );
define( 'NONCE_SALT',       'RjyO]-r1-7.DGK.4TrYZ3>2-]Q3p [)#R6!afY(<,kat$(Z6;-poEkf*!bMk-^Mu' );

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
