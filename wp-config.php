<?php

// Load environment variables from .env file
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
} else {
    die("No .env file found!");
}

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/** The name of the database for WordPress */
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** Database username */
define('DB_USER', getenv('DB_USER'));

/** Database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** Database hostname */
define('DB_HOST', getenv('DB_HOST') . ':' . getenv('DB_PORT'));



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
define( 'AUTH_KEY',         '}>^sfn?`G~`x- ZHqj5YVxY5Y~X!|D+|>mkFNg5U2J/CFwl?1)H&%Q?+MgjxY}~O' );
define( 'SECURE_AUTH_KEY',  '#(H]=Bnnp9SFkK2$_G!:TT8.1q|%RjMT[GbJ>/Fx,ccea/#nM3JAtY~O>E. rN*?' );
define( 'LOGGED_IN_KEY',    'h)>pd;PZ$=a30PWUNZ{>A-68U8Uo xsPU+^n8S;b;N/^f(DAE3Yh<cF.tHHa,i_P' );
define( 'NONCE_KEY',        'cUd0} i~h*BCd4j[6/]X8U+?W1|04X`*_h|2Ov}`=X]B<,InJw`=x=>Zt9Ik4GW[' );
define( 'AUTH_SALT',        'H@n)rm8hpCH}.4%[&@S,OvZYibWqmXsLh9y6,zsscCi*|#3eZk%?*sBK@SuMRA9O' );
define( 'SECURE_AUTH_SALT', 'th?HcCzNw,`l2JAp1$YOuJK~3e 3aV?Fbo:_9o`+9_TbS4CYRL?=oVZtC~zKSMmc' );
define( 'LOGGED_IN_SALT',   'I)@zYGZ/wA%]^$Pb(~!F>p8Uc46CosXJ[3m#7K3tGk4`|;]/0k<dIrp:r  ]6:eq' );
define( 'NONCE_SALT',       '.~6]_l!ifnec 0]}jI$mxHp_0x+v i{J:ald3R]TaY)Wh[0:URoT$#`dNg8oR#L7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

