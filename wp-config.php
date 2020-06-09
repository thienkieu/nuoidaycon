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
define( 'DB_NAME', 'nuoidaycon' );

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
define( 'AUTH_KEY',         'q~dq5I~SB;hZ(UqPJ#R+}%NPC!Jm/$19B1loGXM`XuG[AGIZHTD=QMN`iIG!*7^Q' );
define( 'SECURE_AUTH_KEY',  'Aa6Z7E9Zc&I?1}Bd/_cfBg*0~Dj@c@~4w(Mq&/Qo/P8C/SJS?/)&9{BTc&i71e<[' );
define( 'LOGGED_IN_KEY',    '$CzWVJs5-;95=m.[alf/kk|!xeY>;Ffl+A~IftS&.jxE5ZP5$`rDqa2,44]gu9%W' );
define( 'NONCE_KEY',        'h1vD6_@7ZodUpWn!nZ%Nb6?MD$` C[<)4W snqXq3{dAbOy1IEH1w@8sAC`dVbQ^' );
define( 'AUTH_SALT',        '1{(ZU_~q#|P_Sa1zGA96~#w^QS4u%#6NN`l`Vr% )7Yv]g5!g~t}GGO28]54?/yi' );
define( 'SECURE_AUTH_SALT', '(@)?.f-%|?|#)mXWpR[lp,I2zra.EeMBkGrQ;N<tr<AKOirT=/IV6,q^3/x3-rT4' );
define( 'LOGGED_IN_SALT',   'p+/R LJleV6<UxE$gBSs#P; ?$RIG?Eyu[m0^Tl]kIZkxV^I)EwdE5}w@sa3tZT#' );
define( 'NONCE_SALT',       'HRW=r_VP.plw!+<haB-?%[j5H|I*,-9{$+ER@?4}n:c0Y/I)HCoo3.p.K8V#bP<z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dragon_';

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
