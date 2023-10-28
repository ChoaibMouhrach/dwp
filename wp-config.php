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
define( 'DB_PASSWORD', '6003' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '&Nz6i@v44lOWfu2MIF*Yd+.B#_)PI<(5I8,3y:~Z?HG 7WLWu_+/aCq?7}AnX?a=' );
define( 'SECURE_AUTH_KEY',  '^&J_a]+txl``-DulsPN`n)LQfX=!7P,=t^6|],2*C]L^g+;g7^$vM!A]Wp<es~K.' );
define( 'LOGGED_IN_KEY',    'FwK-$p{6SWu^d,?}i,/`zPr>ud`{enz|a(zY-Bg97lP5.vpUda9U2MHOj5#LhU$!' );
define( 'NONCE_KEY',        'EDV:oJ~&MDTbWQGB Id <q5i{S+Qc];3ZHrQK3d3W%t3[[/v-nU.8A,&gaLcG+uL' );
define( 'AUTH_SALT',        'ob#2K4lNK1#eC6M0(VSc-u=aj,@*Ue |UX`PS <0U.1xuM{*#e06kC_iD(^zn%k,' );
define( 'SECURE_AUTH_SALT', '*gnLme$_(H4IwbGOZJ@_8CRH_ef$Ql`%vW7ivp?*Zcd}ijB4?,3B5N2uQ`0~O2D?' );
define( 'LOGGED_IN_SALT',   '!a*|Xh//^hwtg85.{SOwv/+Z$kEqZ/BGL0zYl}nS-4]:lKW bg#!dG|j#S= [T?:' );
define( 'NONCE_SALT',       '/N^5=h!KCsu$GD6JymZ<mT->:pNgtblVNHFge]r4_P&2=w|<1Kih*~[%RIUqHw(Y' );

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

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
$_SERVER['HTTPS']='on';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
