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
define( 'AUTH_KEY',         'pFlKOf]tLQ{,ppi}pK;&}sWN1 Txf1[{)j5?:,HoXq$z2P5_r^nZ&.!B2hM>A8<S' );
define( 'SECURE_AUTH_KEY',  'kYQQ3Sp`vzK&5v$1djTG9nO:j!{0Bfy+Id6:OTp_RP/FkFl,U0vY{l&}K,Z6dktz' );
define( 'LOGGED_IN_KEY',    'Pd0(w%oi}PxmgFkR!ORs3ux.G`7(AxXA2yM4PnVn49rKm5xRdfe`?HwQkkXme}(O' );
define( 'NONCE_KEY',        '9{#Z<4-]-2IziqR%ifL7*gB7**H^r`Hj4HB4s*t]B;t2]IO#W?(MZG?2#domQZYr' );
define( 'AUTH_SALT',        'Y%da({EmJ_C G 1b2~gJU`@38DUr1%vqU)NyDBHO1R<E&_r]-EDgK)y:LZEKVr8G' );
define( 'SECURE_AUTH_SALT', '!dq*Mp`vjtRvppZR(D;wv{i@:aSFGO;c@JL@$Jh] .4;!QC~S-^FW g5Zt]03;ms' );
define( 'LOGGED_IN_SALT',   ' q+X1gM<mlL=ZNO)U?!9q|Kiv^RBEXM.I8y*wkW3d)3!Up!&gEX>M6,<lm!%f[io' );
define( 'NONCE_SALT',       '.~f_Wj`8xN w-.nd!/??kf;u.7peBTf5%B]zyZO?MzglZVFvYGva.i.1$Wks/N-A' );

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
