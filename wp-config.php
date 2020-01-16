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
define( 'DB_NAME', 'onfy' );

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
define( 'AUTH_KEY',         'y83@p9P{YHf;yo>Iu<0a/$)37%@@?D}6M/jJneIJ8ec6 ?/](xgM3EkONcE^(+5J' );
define( 'SECURE_AUTH_KEY',  'x/r|&3%|Ly6CK*T5FCM]Ly38-3_zdO6KVxWD!!pYwi8Av{=rqLbd^r3oR]id_nFz' );
define( 'LOGGED_IN_KEY',    'Jje.n%r5iDUr(mc8aR73E|5UQ-6zZm{40ws7mrysP`3`lhMsw|; w|f)T~~FKEwl' );
define( 'NONCE_KEY',        'MY/]lr@h[4<%fa$%=[9ARSE*>lU&WW983cG5[VakvCyeU{:j;a4h,Ru6!CD}cJ73' );
define( 'AUTH_SALT',        '$uCk^kv;HcJd0xUG#iPd)N&<rk$E%eO}S.C$Mgz|4t&kYtx  2D@eu~knTpTfPek' );
define( 'SECURE_AUTH_SALT', '%/ZJGQ^+Cli7>hmE<Eg+$(w%#63!SrgK}4+w50,_VbtdPPE2ZhM.+w)Uxigi-?tQ' );
define( 'LOGGED_IN_SALT',   ';5v!N)QA8nL?ME^c1Pi#*w=]z>>-ES7E~n=t}}$zb,I@wwS%kO!Xu5_b5s1BG1Uv' );
define( 'NONCE_SALT',       'V*,f3gV}QG{ 8})hwYq5Vq?kam5)>%=GY}d:tDpQ@Rj#5l^03>VT:+G_/v!iVqE(' );

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
