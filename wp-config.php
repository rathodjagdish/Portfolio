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
define( 'DB_NAME', 'mysql' );

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
define( 'AUTH_KEY',         'mta)|}v<[j9jVFK@(_=x^*V#2rO+ G,YSY6~~-:3 ?y9<Qo.QJGsA}-_@u0!U=|e' );
define( 'SECURE_AUTH_KEY',  '0&w)YS+VlXz]UgRvOfWuUin]iUVuJLcIa4NR*fnA-pjtPV$9A$)}[~KXBKNsv>Iw' );
define( 'LOGGED_IN_KEY',    'E|WZF48B]P-4v-FQIfz}]VmFf/rOyySqRkENOqv`gtEC2jnwktDq8R$!>-d}/&hb' );
define( 'NONCE_KEY',        'Y(+^5#f[jYhf]M|F<qJDY;ZtA6nI[O#cWm~3MN!=m|v4V]c&ll{13KGmP~/v-L/a' );
define( 'AUTH_SALT',        '}w20^xI39T#s#&P6EDdL.9Hv 862Sy79^Wsz.OZr9p-_7&+sx<=}p$&CyvceS3v5' );
define( 'SECURE_AUTH_SALT', 's23RPO~dH._K7Gyb->{hrt{3tYCWn:]T5`5UoFv&euc^K>9YE^_]+ojFlDyKotg:' );
define( 'LOGGED_IN_SALT',   ']ff0y $6*;,UXHVjI$tT@4Ocx8Mv=19i`[Hm`/Mei)=pLJ%R@NDJ<>HY01FpCcfE' );
define( 'NONCE_SALT',       'Q)@|lVLEF:8GDX[JT&pf.6bG2b.U8h}3l7rr([IV~,?8+)t~qDOJn?1CLd4pky:Y' );

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
