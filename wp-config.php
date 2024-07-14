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
define( 'DB_NAME', '1tamilrks_db' );

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
define( 'AUTH_KEY',         '4h1q44Jn&*To+7<k,mr%f5sa{|2V6%&kA{i8;wdEJPanWWCXrr8JymO8#Xv.)~xf' );
define( 'SECURE_AUTH_KEY',  'uPcWRZ}R}P~lRDo ins@cKX7TwG,5C17|{f*kNvSr|HI~Ta)QQSw`<$eIF;J]V~t' );
define( 'LOGGED_IN_KEY',    '+{)I,Rhgi{(yeLyT|To6Y^)%p)zBUDj&D}>=XgnE%K2D=ajNYl=vqbex.$zA: .0' );
define( 'NONCE_KEY',        'k9HwLxWe4%3*dA?KBu/!;D(E$XNHxNH-vB=t/n:0,u&+|Im nr%lbg<wo/bT=pQ>' );
define( 'AUTH_SALT',        '9gqPRR~>5G^]^N&>S3ZU-WHz);}/ 7:BJIK:d`AFh=5lLZS9%,4EzW8r~/|IpT2q' );
define( 'SECURE_AUTH_SALT', 'H0.`ed!^j07Hxr=&ZCmUce,sG_m$Y Z=]d@L~//*(c$EF0>DR;m{m=ygtGQ?]HuJ' );
define( 'LOGGED_IN_SALT',   'WQ+xVlf>mASLdd?Mc*e=NXt=p *-kw9kn!y+(i;)<~Dlvo~9$lC~gaw8Jx5j6jrq' );
define( 'NONCE_SALT',       ';a[*etpp@9TX}zQFy`Y/T;eJN#zLlf+==~Pxm%wpOW&DiAx9d<[zCJB3/imEC_>k' );

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
