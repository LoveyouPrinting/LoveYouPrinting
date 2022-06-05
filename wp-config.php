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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '2<kz,F5+I+;3sGv8/uH.,!P 51_q-21_MUB;zV),/Vfyhq99mea=|EL~V`5!8Lxd' );
define( 'SECURE_AUTH_KEY',  '8hX,?@kal%G,Nido]yv6aS8/MJ-sO0f.vw]GDl[/-<qP104xIeIFFZimPXZbE4u*' );
define( 'LOGGED_IN_KEY',    'b V3I| zIj&T2[^xUZ9Tl+4Z#TXZc+V,J<Ml79W&h,xivjL[s9>*)c.!1^gYCxMa' );
define( 'NONCE_KEY',        'hj9jmOBWgEu$z}oT:}3)s=5`{:JUh$ncn*4K!|sQ9n(K50,vAb&S8nA0N!!IO]$K' );
define( 'AUTH_SALT',        'zp+21%x7Tm$Cd}g**TV(?x+h#h 3N-/It~mcOZ+w~GrCd-ciM/V4d4nz4ne9@!N4' );
define( 'SECURE_AUTH_SALT', 't23_`h3H-e2U[7gCyO{W/9(=3K)E!IYvC&M*5?m>iPucsZ-+*sWF,[3zuyP>&|.1' );
define( 'LOGGED_IN_SALT',   'b<dfDIZe1A .{CAX7B1.fCR9~GaQe_:m3wv5mXg!)8ApXy#`i)C2r]lsWF?KDfAn' );
define( 'NONCE_SALT',       'y?pGx/wuOMOLy5z W)rBMn=28^GO8iQIlr{z?UL~E,4=4>7Ow%$2QM!FX|EIH.aE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
