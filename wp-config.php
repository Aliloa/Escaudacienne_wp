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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esc' );

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
define( 'AUTH_KEY',         'R$9,x3$vxY3F(*HnPE}Fh}X}EX{k1L^oX)GslzCM.5iDx^^Lz9XM5$kJAbMxJRv-' );
define( 'SECURE_AUTH_KEY',  'y2(&XGiu}xS]lBx(Ronl4F2j/m`4baNqhG?3FEI>,58oTXHDgSYl3h[Q v1#We$;' );
define( 'LOGGED_IN_KEY',    'vocIDgRjCd;|)|AmRe_8}5iw-1(IjCkhG,KOOyHxHJRg9GX,^qaV+DZ^NFMq]O^V' );
define( 'NONCE_KEY',        '*6fO>OMa)lkm%/T.jJKyOj+tfbHi@G9Bd0AS0iy{lH?lB|`E@F17e&8`0e#`HNYP' );
define( 'AUTH_SALT',        '|b+3-+Nnhh)3Z|T0cFwQTbdBPUz$U/;0l&8${fy2|?A/)tc=w_c8AN$jTvzfu^0y' );
define( 'SECURE_AUTH_SALT', '2T3`QO2_JEh:9=n=3)z-rO~^^co`=E]2=}g`VaD=/sNah+v&k?T.`cYp_hLjS<mR' );
define( 'LOGGED_IN_SALT',   'TNGZLg.w&9Ahv&*gDdnA_X9uIJY-4)wQ~DxNTZk2[ivLU/t`rT?TkR67IYZ/ejvi' );
define( 'NONCE_SALT',       ':}zxdlrzTY!c sL7Ng.C{_6)l)Zp1puJ.5)>?0;YM~Q-!S5db4b$_=A#D#UrWyHq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
