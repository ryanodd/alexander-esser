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
define( 'AUTH_KEY',          '](tme69Z|%SWsmE:]^fUm{ySyY}-J*/jwU*x ,Qlt02|a!^qOg9/r@Rjr+Mp*I%K' );
define( 'SECURE_AUTH_KEY',   'b5IZBCW4S^K[/IL{A>O3ovjHxc{~,VYqgA]k={hNA*dEXU2c(}{Ls{qdmgrpBj2]' );
define( 'LOGGED_IN_KEY',     'o&H*X6>J[Wb75S}nBW|joXA}neFO)<HZV/o2bg1MIzU$P%V(i_-{E*lo?N1DUoeM' );
define( 'NONCE_KEY',         'j`3ENC.SLGE2Gg5tx.$jj0j5aLH z,D%r#Y]%UAfRCl@GPqRd}Y.{Qwz5BMuLKEB' );
define( 'AUTH_SALT',         '7/7v6)7Z+?nI#&kRU`t+`mP-+07JP`C#JR&ICAu(}Ox=$0Rzm;h6n>wUDt5}enNS' );
define( 'SECURE_AUTH_SALT',  '878Zd=Kh},qaYIxtVfpKn%#sxxC,D.j9` PSoyjNl%I1uN<bN. @-^mN/gXi#UZJ' );
define( 'LOGGED_IN_SALT',    '/o!oBz}o`gEgiioPh!6ayUVO]AsdHS0&nov:Ew{bmbS)k@8HKOL(gUv?ZH0b4+MJ' );
define( 'NONCE_SALT',        'ZvwRbY}L; NcphB{:0r6e`H#(i)CF((aSxFSyluX9ev.#;8Ci<kNh+Q0rs-#8i)M' );
define( 'WP_CACHE_KEY_SALT', 'M=1P[+ 2wZADRx!<!+.#&lwy,uJo#k1_#IKFaT|[G:}]T*ifW$okW+,hKikB:QJ/' );


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
