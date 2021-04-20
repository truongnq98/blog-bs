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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Z[jmc6T~-w`WO47bL[U{WG01mioR(.b)Kq^v<Gp&:@I1!WAvCLk[:{m ]xTzBzWz' );
define( 'SECURE_AUTH_KEY',  'oJdrWW_?!RnX4ki7Pg&ybg`B{WJEo/..4aKV6Wcu>r)iWUI}AozHwv%+:khiu^H(' );
define( 'LOGGED_IN_KEY',    '@dY`L%c18w`Y+LP*$$JU5d1y0jwlW-~9zT=P0@d(Oz=[50h_=er=+A(p%q{zg0oZ' );
define( 'NONCE_KEY',        'j~QdP*DB022Yv){vB5+[Lc.@Fvra_z>-`0(7vN~%4fHsjfb1q5l!^1pnu_Cl367I' );
define( 'AUTH_SALT',        'KeZxD5Qi5E;Q<yQE;+y_wX>+|3,ivX4M*nMULUtc/~&(qol9j#Nz~AC1Rl.a0LoZ' );
define( 'SECURE_AUTH_SALT', '6U|HwxjvJ4/p*Ka@j*o6CxMQ^!J*QiA-#YC&1fZshlrUEz}_}Api*) l:51J,;4O' );
define( 'LOGGED_IN_SALT',   '%TP|([*vHpF}jr3  CE}aT%^z&[vENDb@9` ?p:_kS)`KOyjAs9~pN3%E[s2zv{5' );
define( 'NONCE_SALT',       'u(,FKcF8 80p{792E]cQ}>tW**,fePiijwF}9qnf:WFx!1T9WOqQiX)8j=Pyc!e^' );

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
