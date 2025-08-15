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
define( 'DB_NAME', 'My-portfolio' );

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
define( 'AUTH_KEY',         'r~eqSE*k4IM7t_&I*;pv=:<~3-V#Zv`BFLq_3.+GglY9+GwAz[k/Lvl]BbtM/V/:' );
define( 'SECURE_AUTH_KEY',  'w5k[fj][d+5Y(=_y#EqpYBsLd9+cA7VE#;)L?KbYhv3xb{E@h`b;^@,/<|mxJ8bQ' );
define( 'LOGGED_IN_KEY',    'Ux{14EY`(3M:U>dC%)JDjL9O~1ZWO*h{6JSw_50ncIU]B|7W-plbueXT8VoQQ_-V' );
define( 'NONCE_KEY',        'UQL.Z*IwxE(f;$.<KILZbTucc#ZrVj9D6$HE51Mkl`WS1X.Pb1$FOkSVm9.a$ufy' );
define( 'AUTH_SALT',        ']*3)6y!HprjzPaLH&`KTXBnQmV1B$~ePLEL[xqpkv~L}8xKcMeJ-E8uS#[NE<g_2' );
define( 'SECURE_AUTH_SALT', '0em0.p{4/$c>WHF3Tl<Eo5g(@8dVRi-d=hm.@=_h]JWB%3HUa4S)p)&8in[-o[n0' );
define( 'LOGGED_IN_SALT',   '7Q&5Y~X-aB=c$w77d3Z^h[ ~?8>UIFxtq1ddZ*i AStLHETa^`dJ>(o8L@TOFkG-' );
define( 'NONCE_SALT',       'koO9))R#X3_h2;oFB!c`2BEkm110# }l2W,|J:g| vktaSY=7*#l$DW[dz|VyZKT' );

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
