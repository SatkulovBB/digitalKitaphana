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
define( 'DB_NAME', 'digitalkitaphana_db' );

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
define( 'AUTH_KEY',         '#]Hr@j$2JVYd*f<|^L%&Pjv<v.fU!rtQ&FQ41mh|O1PQbvpYgsR._[s-_yc8?Q@*' );
define( 'SECURE_AUTH_KEY',  '-Tu_3KNpNO3;/u#&e>e0<b?S.h|f96hVRi(BhW~[.x-OVYadt;cr-03[@(Hw-RGD' );
define( 'LOGGED_IN_KEY',    '#~>[j5$8%Mu5eruRR:[{K~0j>>uLwX@gdKrAP{u6mVtazje8?jRFnC(( 4NYEKf3' );
define( 'NONCE_KEY',        'uG4vu/KcnJM4c^RE:]Mp%]GdsZ<H?:lyg#Ck5E+w )^A5CoV%fg51;`1YS>v8}d;' );
define( 'AUTH_SALT',        '$E]~%^evCr1p|B7$94uQ{UuQ},}qI{}?0#hYK3<;+~y94lui^4a7[2WwE-tXS>Av' );
define( 'SECURE_AUTH_SALT', ')4=Q-!,|&hcB[H$j[F6+8IQKf;(#r{|m>!a/I(IO.|DZ_UT=4^(67ZZ|(lnmVfCR' );
define( 'LOGGED_IN_SALT',   'Pnx;R d%ix~Hh77Re)ag!g90l${>Nn(w&r(+)Fk;CZnW>.e120OvaDvpx4tr]^B<' );
define( 'NONCE_SALT',       ',rXPSkXftYmlBKD$r~1J),h1+YHU:1Bpi_ZFYj+2WjUOGhu,I.f{h+6VNX$yV,Sx' );

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
