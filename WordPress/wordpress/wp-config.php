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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'GI^D]q[|r;NkQ^zfLF8s+2=+M%Oiy7:tP=O*_h` %a;}[6Q.b6SP-80uR=<xb-u7' );
define( 'SECURE_AUTH_KEY',   ') c/M)0.0PYbq[42^qu^]K_Dh|KmC>#^]GI%d{|bc(+5c^mjq^KbL2f==EM3Of _' );
define( 'LOGGED_IN_KEY',     'Ne15x-AFJ`Pb-F8M3YH?_tgw[P{z(;Ce(?|puRQhpOHSMQ!aPmf,/&`sLga&%$ K' );
define( 'NONCE_KEY',         'DpA<vpkm)3ysK&:@A,Y~t(I)K_BqOps[b_e+Loy/;Iq3!H`4M==]=p//yx)~qgYo' );
define( 'AUTH_SALT',         ']==), ee+p9N]tCU&:( ,<n4diB%0~{U~G&8&o]3]h<X<Hum/rH&4Sp%].F3y:JA' );
define( 'SECURE_AUTH_SALT',  'vOM%qp96)rk+;8si9`gP:FoC}hmfCob2yLz*}]BE},xMw%]S8h:ZdIQ}ke6mTV;e' );
define( 'LOGGED_IN_SALT',    'cbRZ)L8RGupc7NpQOe^[h%wSy;bW1);3x}D_@Je*=UQy/=ms4*P7o8TR1T>j0HhM' );
define( 'NONCE_SALT',        '!|;R?~({lSOJXg^;D2y.? &E0>L%+rtVRkon/Y[e5 S79d|e}rO#&?iGql?&yaO0' );
define( 'WP_CACHE_KEY_SALT', '3IYhcqX*/n9Gd2uZK@drqo?{z 19d827q 9j:Sx~NNQc6CWNU3Du0yi|8DM&q}1a' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_jua_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
