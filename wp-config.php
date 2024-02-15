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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carcatalog' );

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
define( 'AUTH_KEY',         '+ZJR^gKA>92-NcpD{/Pz_`Ufgf%8<WD@rMx;M>J5wghpiGm=w7V!^4dL1]C[<~xI' );
define( 'SECURE_AUTH_KEY',  ')2ceaJ6N8ExS:uoI3<&y-__rO$<&R0>91^u>9F!0V<kF%e]u.R>VH>F;*6.5^)6I' );
define( 'LOGGED_IN_KEY',    '35a}/}g/9gf}jMf= 8uO?(2V.xW}gXR*Y4F:h&OADV=GEglDt-ab;rVix.9<NQ78' );
define( 'NONCE_KEY',        'drt(zRm<ZJnI&Pn`Xl@i7n,T,[2v&u84;Z@,jC$eF2Wn%/oqyI~H^YsmJ[nO~Zp)' );
define( 'AUTH_SALT',        'bz`gP+`rC!<}vnjwZTDrIA#@C*/7=|H<$8p*_W.xVsh:m_|3#G,{qY])8&[ww>Hu' );
define( 'SECURE_AUTH_SALT', 'MQIfP{:,obb(S]{0_d1jB}W78eJv1sA$WF>2bxjWL6Dbd%s[W]PpQUU/S}QHJ@P ' );
define( 'LOGGED_IN_SALT',   'l@zdDPQI}*(5T.31#{f1cq5Kzuk=E1{rLw<EZ2V$^z(4cx5X5EOH>}XCm/8aJ1L_' );
define( 'NONCE_SALT',       '=VvMt4D&#7$3vs)0Y&*3pc$IO+Kjs`2CN<7:xq=H%~ip3(*gs_W{EMJUPIRlRN3x' );

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
