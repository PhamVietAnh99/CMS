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
define( 'AUTH_KEY',         '1!1IPuY9J%I%?NnK{WF[/},V&6GEVvuoPAnF/[B8IW)!VTZS9;Z)lk/tR[XQtWI=' );
define( 'SECURE_AUTH_KEY',  'FN5h#ULb^49NUl,1Sn1Z<L]~qND3&cx|_(Gg!:(!L/yqTt%HD2I>XCWfmtAy91%z' );
define( 'LOGGED_IN_KEY',    'g|o:+dPV9@tdBhu9AimP<pcX$T8y}7875iP&&#Oy0uxx{9_F4%r1N^P59~[94baj' );
define( 'NONCE_KEY',        'Km!8ED0(dPq|8<h4E3jNS{8oMG1ALv2PnGlR5M)6l#+!!zyL?B2J::bm0O EGg.:' );
define( 'AUTH_SALT',        'n0JGf2rl|<^3W(sR;c`>mqmK-UiT{lJSg_YXc;|gt&wR4dW~q`iuz^3MS/7cO<o6' );
define( 'SECURE_AUTH_SALT', 'q$tuT32?:6Vb7%G9}Mk.C5LgZmU7 Ot.I?vt8C|UOO-={qSFhsK}+^4t3#+^k~4`' );
define( 'LOGGED_IN_SALT',   ':gOF<w S26tC@.YWI>?21V[F#S/jd?E1%yYWXhtcasZyw8aRGI~&-+:z1_.0bjA5' );
define( 'NONCE_SALT',       'J{r[<q 8ZIfy@zT_L>iuQiq>Y?zv;i18Y,O0o|>zm2Xc@mcnJr`)!l[Fm39.Zmxa' );

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
