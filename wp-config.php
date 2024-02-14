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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^2wT$`]ny/SJY=UGt+YoSU|V!-#_|?#Bf]cgq;c/wx,d|tlQwF[%L=N4Q;,&4@Do' );
define( 'SECURE_AUTH_KEY',  'X^;+N*]y74)uCWHDy!bKrf/t<n$F}?LwM.Vib^%EUPQ)SaXk@`=I%?>p.zlIM^<D' );
define( 'LOGGED_IN_KEY',    'x!pxN9|:p+3Y;zP03/zdkQFQ_.FRyG$q>^E##6-811o/ SFhmXqj@UFm+F3utOwJ' );
define( 'NONCE_KEY',        ']X)y7d,1a*V^myZ^CG)o]w_{$SqY*XvvV>}Y^6VsD|1diw{RqH*,o;;1q<rcc.rU' );
define( 'AUTH_SALT',        'cq2hEs2(7XS,eRD $ h9ucq>0S]GxB_Ru:oASgD%3_< 4tJ[Ea,)A,P_*K{pD?Nl' );
define( 'SECURE_AUTH_SALT', 'a7C*f.HM1|=39JD[Q)$n.H8[{^d2w;X>H1)swJ|Jfp%vkWx7?^!L)T<[Vjdx w(g' );
define( 'LOGGED_IN_SALT',   ';k(z=zq?iWJ:fa8[i/I52#`.ev;B49C}5$tBPy4aJ[!F5B/8^{k+xEfxFX*!6U:9' );
define( 'NONCE_SALT',       'Ph2YWMe*98<B]Z>oyk-gidm4d]YrR^_~5^svQGv)W@]lP$Yi.idC>|WrQr!1zuEr' );

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
