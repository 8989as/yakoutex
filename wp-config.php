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
define( 'DB_NAME', 'yakoutex_new' );

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
define( 'AUTH_KEY',         '|HywYn$GFW1(]VP:*@a)FZX+Uz><s]ed;v*G E)0g6Yv!(^?_j6$7m!Bdo:xe$Qt' );
define( 'SECURE_AUTH_KEY',  '.Tpuq{psKxB.hyYl4Ym,dywtD4|eJsH =|6^9-kQui@Vit^2D,nz-,NL;F3qq~O*' );
define( 'LOGGED_IN_KEY',    '1_#x0GL*69fJa8A9;A4{b~e2tU(mt=_&(GYS`T6pXT$~3~+$2GqkePz&?H]KXojJ' );
define( 'NONCE_KEY',        '^81rwRQG,DyEj;7U8kf|-Q>PrHKs13ve,xyAUL*0=/@Q5KPoo;/lsgf/t[_t2vUl' );
define( 'AUTH_SALT',        '*UFJV:6%n-z1JR`4T#]+Ix9M#mJ#XG/rh)Qx0AHPLSS1:+9dYWWO_[yk<2)}nU}/' );
define( 'SECURE_AUTH_SALT', '|S{htJIF!#@-m1Pn7{Jp-tjQr<q#yf@v|E2v2!ZYoT|o,(=uOw<^b4!*y`r^Fej$' );
define( 'LOGGED_IN_SALT',   '[NRpSSFO#3qbd|=3^SvW$M_C~TvJSM`n7FQF);!e1V*!TB0se[)al/Amm)`UF|$;' );
define( 'NONCE_SALT',       'o`XfD[s{b5X-j|S(y/z=/yAb@VTH$*6NYs4P!`1mU%`RM=1d^r{NkSc;.W~v5X8]' );

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
