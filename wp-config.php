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
define( 'DB_NAME', 'code-flow' );

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
define( 'AUTH_KEY',         'VYiyYurN-}2<XBlDf|-)_2=?PFMKeUQk#L|7/(+J[t!9MOpU^Ch4C<4c3!zJ-m0_' );
define( 'SECURE_AUTH_KEY',  '[9CG2Wu6y-4J2CbDG[(U?GC*{)H8T#:sAWGhqH SX}2$X*:vZSDwW9QO=9Bdcj|a' );
define( 'LOGGED_IN_KEY',    '<g{]`UxobT0#6eGyeO1r|y,Jm?m z v[Q`}:BV|]33aO%>9.(f2 %UXjhzdI0+5J' );
define( 'NONCE_KEY',        'tLF+>8@O|22SCf5si3R`)nw^-I5sM&3<:`#J6ceia|!B#X VzV&*+x,Veb7mCq:.' );
define( 'AUTH_SALT',        ' i1WaxSg8SYOwlfff)Sz(Iw`fScbf[CeJe9uX.LP6zYDIFnq% J@JX+PRatJqTEi' );
define( 'SECURE_AUTH_SALT', '4AYIQerS];/00jW5)aCu{)`TO)2(3uopfOv[b/y1r=tNYp2D-)tT=)=Lqf|*q(%|' );
define( 'LOGGED_IN_SALT',   ' r7=[Z//P(p<nCVh$xRxRXIZ#$g0!R2E<DI)ToahNy*=|0YdABOt,JtG!<cqn.1V' );
define( 'NONCE_SALT',       '/isM.yMN09|La.~PH:MVq&X 8$(4R!@EJ!?[E8IIk;/]E+kEGJ}*l9Z2h`^xnxW{' );

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
