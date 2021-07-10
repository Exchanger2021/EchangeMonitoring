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
define( 'DB_NAME', 'exchangemonitoring' );

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
define( 'AUTH_KEY',         '.-w<YH_Y9As`/dhf8+yf~m6-[f =xd_xj/p+TWEEU5tB/zMNQ^V/lMTd:k^e[6x+' );
define( 'SECURE_AUTH_KEY',  'KVh`O(<<#uaYx6EbBc5YVB8~xU>k/_oDMjYQ4N}X{D*M&D[N^M$E|-]Zr#Q5bbBD' );
define( 'LOGGED_IN_KEY',    '9PuRn$+7zpZ_Qte!-HB?kyrU b`L5j2=MPLs*wqf$U}u8}[h/IVAi{3n)z.LQorv' );
define( 'NONCE_KEY',        'bI6.ZEozZ6F/sWwbFns?wOALSG];Bt H$1jzbhPjgWZ@.nkPlMXc!f%<-W/HDrHA' );
define( 'AUTH_SALT',        'dT_;Q25ganx`S,52lMo-ZgXv<zXn}e(i6Fl#NG3XMx7^9^..JonrW(w-u~%#h55!' );
define( 'SECURE_AUTH_SALT', 'Lb$Xo+1xn[t#agi+3<Jap<&&{[s|ADs^a]9ei[4oe1GD]IZqVcw0<p<8PaS}XxWa' );
define( 'LOGGED_IN_SALT',   '_&04xvC-%.x+k]aL}jbN66W]RaTwa<>#P2*g&A&5(MN&-rSx[HUmQ)5St(JS#?Ee' );
define( 'NONCE_SALT',       '8,9nuK}vL;S6S2gS(|KLu8[JD},^l?kf(}lk+jv s|XIX(<hD^T]x;IN>vgNUu%N' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';