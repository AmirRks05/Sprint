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
define( 'DB_NAME', 'DB-Groupe2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k?])myf.kN,Qwp#<u^j+HY7LR^yYM@iR}Q([p5%JCypVAtRee8wotzdDS9Co<-Yc' );
define( 'SECURE_AUTH_KEY',  'Zz#BAI6mmhM4?%|T-%9+m{P]5@XgY pv1FA$&@)o:g`.>1oPdw,bp/<V0I.P3*Xa' );
define( 'LOGGED_IN_KEY',    ')BHRoWNYE^S!xQormfm<%H%OY7y;Fd[;Xg!KGR=_Y,aDE_;cJkr5AR}HoG-|+8jD' );
define( 'NONCE_KEY',        ':9Uen|vuG3U5QFk0UQuoye,WqKo2Vl(Fx]zE=ilF$2o}6Vg,^TOMgbEmDN$g#A/V' );
define( 'AUTH_SALT',        '84-`e~:PS<-6a#ws)jq[s!^44+IJuxD8W3PU|L<<5o{Dimlw/|z:Gniu<|H[i:&5' );
define( 'SECURE_AUTH_SALT', '%dKz[zdCh 2-S>poC2,b%Df_4Rh Ivxk`y<M{4b-KT)zWqS]|>XAm,&/?ZPTG[X[' );
define( 'LOGGED_IN_SALT',   'Ho;%wiQb y7TD[5}Ji8nr0vMv!gG<mz{0oG9P8XAX&I.3yuFHxR9w;4hRT4Lykg-' );
define( 'NONCE_SALT',       'wD;bB:<P.f,<qPiM6q@]{-KGIt!{NfW1t1>kW0C+3AL3WhVz&<XW:!>7Muk{ucF(' );

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
