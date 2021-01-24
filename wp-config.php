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
define( 'DB_NAME', 'a.react_first_project' );

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
define( 'AUTH_KEY',         ':|#*5qTQu[M pt_I2([,r=OYBzF5|,2]kDY)(6456D*jy+oE5B>RfCcJkVLogw^1' );
define( 'SECURE_AUTH_KEY',  '9,+NfIAAunHQM#$(4LPU{i|a8 5p``3i9F>!Md2`h/H%}4vy8^3Dtp 9?*OL@&py' );
define( 'LOGGED_IN_KEY',    'mk:llw/d)W5iFc]I{^Az9J> ^*N>v-5O6]8zKYbzVD;(9)nH7?<GG^k4X*>Wp@$p' );
define( 'NONCE_KEY',        '.D6_(,o~pr]BmEy}JYHELek|>%Z$1 %!kz}`R[!$5W)<Px%W]+nA#GekhZ;AKYdM' );
define( 'AUTH_SALT',        'O%11)}u3#Qi10EZJE>uWbMk4*zGZioSt(dTP@|2N%(!gOxgVhL!19p/K5XSp6Y*X' );
define( 'SECURE_AUTH_SALT', 'kPnf]y GkfJGL`5v|6~y4Tca~eIn5eht)RTRMIWV5ZItdE^eZstS(!,Kfn<7~Qd*' );
define( 'LOGGED_IN_SALT',   'rRRG[,QZu((D1}Q_5Q,%;_DOb=Y?I%=wAqgr|O+-bTt*fbNpcSWRQ|7Qig?9:I<%' );
define( 'NONCE_SALT',       'FhfZV-w<I7XplsBVT*.96<)%%^!7^[~M<Ux{,f}CM8@nf2Nkr)dS:aK]SU*PnBF&' );

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
