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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rfpopen8_wp934' );

/** Database username */
define( 'DB_USER', 'rfpopen8_wp934' );

/** Database password */
define( 'DB_PASSWORD', '1np8)H9S3.' );

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
define( 'AUTH_KEY',         'vndo7wnev2stzlitax0cjanh6loyvjbdtan7n8e4dt3ujqlvfrsa3afgo3fwbcbn' );
define( 'SECURE_AUTH_KEY',  'dub52irtagzjqk04f2dyj4p7hpgrphpk3sjmht47nuzqqnif64jrks74kdu9obey' );
define( 'LOGGED_IN_KEY',    'gigkf3vlzsvhmekluhitwpcxgtjgfbgrvn1n7ijdzaqm7evvcb5pyeokyvcfygpx' );
define( 'NONCE_KEY',        'h9defl9qairq4ymy1zh6nieizhcbpdqsaoijv1flryfnbjxg1xc8zia8emazc4mz' );
define( 'AUTH_SALT',        'hbzkql8giwd3obftk4nsodyy5hcnoukok2ot4l6vulyx4tqrpgpz38zrligc69ji' );
define( 'SECURE_AUTH_SALT', 'rdtkimqgcj3ak5euysdntrck9vqstcmclpj7okscorn8mjgai9f2mopbl7vxelty' );
define( 'LOGGED_IN_SALT',   'mwuqkufzldtonxyme26p7oyrvofsu3scqx8htvis5gfj8xogrok2nolyjws4m3y0' );
define( 'NONCE_SALT',       'zebr5i5qcc6zbv5khow0q8jq3vbjbq6zi3ijb3wy5rqnp3r1ngkgvgrdsaob2rt3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphn_';

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
