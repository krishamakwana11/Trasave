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
define( 'AUTH_KEY',         'Tq&36D>8TT4K}Y$&VCLSJ>(G!XdpH~)<]Vf(LG#m}OI o*5`7&Mh|N>WO`fUau@{' );
define( 'SECURE_AUTH_KEY',  '4wUp5=W[({S|+msamp6; f>}:!5WAG:_jorRQuF<Z>fon?m~Rg?e8b10NIV46jiQ' );
define( 'LOGGED_IN_KEY',    'y1>gLI4W599Y}7D-B}jg)t2Y=%n,2I7|Y0HG&dcmmSr#LTZmNnH~$]J~ci9}&2o6' );
define( 'NONCE_KEY',        'rMPjsZb2n*X!d}.REt9fzHZV:[ _FBO8TOc.Z?0N)8&z(8=MjdkGe7H~pT_gA>/`' );
define( 'AUTH_SALT',        'nhkhoF|5*Lk*:FDo_UQ<)a@XC+vk]$0_.~ZVX6Q3<Q6%{PYU/t$.H^>LNK3>Z]tV' );
define( 'SECURE_AUTH_SALT', 'Uli$[KZq}o+|~nEzbSi^;Ff%yq+CmJ0X1QJ@-Yv/~Z>ZX![0NMNu<#GRC^ILFrR4' );
define( 'LOGGED_IN_SALT',   '[.PW5iK7c-fg:9pZ/2n1;a:#5m$-V_t)37F)TI(}klfiXvDvN,ioJi^5@#GdJh:b' );
define( 'NONCE_SALT',       'i)ZJ?6ItO|MZ8;K7:/hE8?J!zd6VKl|:*xG|tZGOwr{qj8WMzi~|8-F8YFtgs|-k' );

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
