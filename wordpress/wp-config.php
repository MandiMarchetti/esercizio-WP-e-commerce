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
define( 'DB_NAME', 'wp_e-commerce' );

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
define( 'AUTH_KEY',         'K#7K;b.iv9_a2{1)S6IDYxx?~P,8pB<we5cMPkw9m3H9r-y4d %Y^(|yqJGDJ;:u' );
define( 'SECURE_AUTH_KEY',  ']>Dj>oj:whB|SqZ/8iMb9 0_gvPaZt58Bx~J02u!C+r*iyJ}|PTa(tQfFmg#{D@R' );
define( 'LOGGED_IN_KEY',    '?=fN5_]zLJF^v;*DXkxA|xU9E*4!gN|1VHB(L]F.2Ak?ByTKR#^&qu:=)ha5D5|7' );
define( 'NONCE_KEY',        '-rVgT@6HGr*/@eBr]0vL?`71k%87^+B-S%D/iEH/R7tJ3{zaI-$6laNEe=Rms*ZD' );
define( 'AUTH_SALT',        'w(UC>?d7,nQ8sv-3d*^5M:1^KaCL^}Eo`XTqf%:%Eoo1iBlhoL2DfF3w c_paIh7' );
define( 'SECURE_AUTH_SALT', 'O,A>FY]{3:IMmR;fYk=<COcT^Wf5Uo,>R5q)hgS8OF4Y}J4bu_;qr7A9:BepxflW' );
define( 'LOGGED_IN_SALT',   '-;:n!5KO!Z:iW|IjBCC6 #J~8,#<~(P&4WmieY?60(W1 =-IV?RBEqykW3ZM,jQZ' );
define( 'NONCE_SALT',       'V;_:&B9rR;F1qtsYN~lT %H4-J{+&uC(]}|NF7)]|Lq0gP#>zj-D@qV(8`^gs{~W' );

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
