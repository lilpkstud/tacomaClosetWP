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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressStore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nZTN!Z[iX_.uUbP.9GJ4,08uBO,dT] p@hZp7UDJYq-7$at(xy- h**=m-[](^!6' );
define( 'SECURE_AUTH_KEY',  'FM1fS@,}OkqEil9F<x_Lx{cyTnM2?($3 HIJ>QV(#z$z{t9mQatu$yrWJdDyFvIC' );
define( 'LOGGED_IN_KEY',    '`gWD8|F;l,0.%f+7K9~BlT{el[[1<&~u4a_VBscOGjpB2ScyM2iB=hD+(:UeoJ+K' );
define( 'NONCE_KEY',        ': .<G?V!]>`&Gm)p1fE^O6weUnvY1}R3fowpPC[Xoi!f_Yse9X|uqc{:F@lMt+cG' );
define( 'AUTH_SALT',        'VLzG9|7eS%DDzyZB<L:|xf: rp!nqI4$z{7>vgvqS1M_^Fo2YEE)#~k](*N|560i' );
define( 'SECURE_AUTH_SALT', 'Xf^].3~h:{tZ4U^V=6B%APXF}9ymSPoE$A<(q,z0+Z< 0<?(A~z!f!_$N|QUO0V ' );
define( 'LOGGED_IN_SALT',   'W3xc>{uJC9kMLX[*{Wu{+F]_wA#@GCXTB^_%kmC0VqxkAvD3T,9]xo|MWR,hb-9&' );
define( 'NONCE_SALT',       't{%Hn^VGkz&AdOU3hv]hYD|uj.lOgn]GuY>mZ]L~>[Bb]G}wO%F@3vP/#cLJH.cJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
