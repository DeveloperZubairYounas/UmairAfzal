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
define( 'DB_NAME', 'umairafzaldb' );

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
define( 'AUTH_KEY',         'HTNTT,|?G3Q/VXBd}L6cLPo![V?Fq]Sy75&PNppHerXXLgr9:QCNC(s}p -?l]Bv' );
define( 'SECURE_AUTH_KEY',  '+O=UbaU6BUW=FM56mmEN[1Z`#ur9Zdk,Jn0&2yHdv45YCu!o7_WLvdeM#l5tWb<B' );
define( 'LOGGED_IN_KEY',    'zZBkcUh8n<Q6A+M.Z(*0Bx,.lPW%Yud#9{v*4*e^?RN%f0iQ3&C5])r^6Dy/6{Iy' );
define( 'NONCE_KEY',        'L$9UC%1tjt1Et ;4I-sgeC$a^ZJU(9J)?h!Ox~](Hb:gYA9kJ:j*G$n<7hd`Nl_Y' );
define( 'AUTH_SALT',        'B,tFt}w5>[&MGLm#PDu|Z&$9E_1-x&Wbx>WhcRq`L]<eP:9%j9TD[Pk1l?k_ZqPi' );
define( 'SECURE_AUTH_SALT', 'hMcRqEuiIB:7;2ciC)/(v{b4wZ+klM nZ9IYmV3rh7^ae3nr.st} 4&$no3ndb>I' );
define( 'LOGGED_IN_SALT',   'Ou,gxC2>!vm bxHQVz#Z~f%u!N9eu+Q3OjlA(I&=49;ThL+C1j5d(6%T>T&]7Wdo' );
define( 'NONCE_SALT',       '7Fr!Fj>[&+x{Igd;`y[-akUx6>VggL1AAHqXc7r~COS8dqNXk6r+3*3(#Kfptz%7' );

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
define('FS_METHOD','direct');