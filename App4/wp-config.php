<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'App4' );

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
define( 'AUTH_KEY',         '>71E4imX!vZmQh]_Vu8l{e[hv>=0b@D=V8mo[;}S~3/n8k|]]l{9E7)B3<KZP/bp' );
define( 'SECURE_AUTH_KEY',  'sZ69;gcZW^e _$]dTX=K2q$$d DCE;-qK$~|k}7&~D5=fV8{MQYm3C[OV>P250]-' );
define( 'LOGGED_IN_KEY',    'Zg.^:S8^hjBi.VurH#yNYAx=vZ1kD{P;@~Km}_qM|1&SGA|.F=p$|.A(FL&99o^k' );
define( 'NONCE_KEY',        't+PTD<Y][)HcV42NhYJzYZn[3by4I.O?*:+=a}tshqLo`IY,!NcPW:{|%.__zwv,' );
define( 'AUTH_SALT',        'WSXABe?@*QlJiz?TqaZJWMB9x7iMg>8D`(zJ#W<wjExlRs7}wVGmA#q44B ub-;?' );
define( 'SECURE_AUTH_SALT', 'q==-lT(!RPOhByi;7En*`| }]#nrKF7G5Pt![#;Ss1l37nV8ED-3):mYf++ Q|`x' );
define( 'LOGGED_IN_SALT',   '&[yT_TW#:#B3VM%O;~5/cv@;8BG!8%0eQUpC!(9m/U aS.v=rN_d/BneQkKA!.8a' );
define( 'NONCE_SALT',       'Z%3sPz46I$$yp0@uXZ|:+`-_BENx?`]-+)-sao6oU^ny]L.rpC5dYg&O!yD7;fNu' );

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
