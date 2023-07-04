<?php
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
define( 'DB_NAME', "bahaa" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'JkRYB9S6M2T;|gM(BDaiQ4*p%(aAVGzv^y[Z&&~C&/_Fd*PWz&hU2&$MzT2,ZPX_' );
define( 'SECURE_AUTH_KEY',  'g-w{XS//%&7$CEa/Ym=s}r ufes9HsoBHK~5XAb4~CgL]<Mg([pg;(-xX/A4AOS3' );
define( 'LOGGED_IN_KEY',    '`CnZ)G|Ll{Hi,2&`0kbk[Z_@5;&^<GthayziB|//qXqLTgKe]c31%++|fI`Z?D$-' );
define( 'NONCE_KEY',        'gq{m)r/3+)ZxV.W|hP>=8>G/ef&0zStY(#{nK@&APN|1ufC@~XWxH=;~-avler8m' );
define( 'AUTH_SALT',        '2NQ.@S`CIWXj1.j[Lb4b96]wQe#=^@T*JP$,C8_fb{>l4MS7*R>^CGu8!|NAu/Wj' );
define( 'SECURE_AUTH_SALT', 'w<CHaK_|}(:leAT+/k}_L0lA`:2Z{VFR>>7K/Y|Z<%z;AF? +3%/!S?ezC1d/Pp6' );
define( 'LOGGED_IN_SALT',   'fd*&,R=JsY.8U9AOzpOtz;~*Qmu$ta|+I1jo]*?iTrC3Lj2q|MokiZ5a9 CKOy@@' );
define( 'NONCE_SALT',       'Nh4xG08E>aQZ$k9%!lt550)?OI!6!3p&bb3sew@OVcR{mHu4lr#%;nFnT0]tMHX@' );

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



define( 'WP_SITEURL', 'http://localhost/bahaa/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
