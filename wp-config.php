<?php
/**
 * WordPress configuration for Railway
 */

// ** Database settings ** //
define('DB_NAME', $_ENV['DB_NAME'] ?? getenv('DB_NAME') ?? 'railway');
define('DB_USER', $_ENV['DB_USER'] ?? getenv('DB_USER') ?? 'root');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?? '');
define('DB_HOST', ($_ENV['DB_HOST'] ?? getenv('DB_HOST') ?? 'mysql.railway.internal') . ':' . ($_ENV['DB_PORT'] ?? getenv('DB_PORT') ?? '3306'));
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 */
define('AUTH_KEY',         '}>^sfn?`G~`x- ZHqj5YVxY5Y~X!|D+|>mkFNg5U2J/CFwl?1)H&%Q?+MgjxY}~O');
define('SECURE_AUTH_KEY',  '#(H]=Bnnp9SFkK2$_G!:TT8.1q|%RjMT[GbJ>/Fx,ccea/#nM3JAtY~O>E. rN*?');
define('LOGGED_IN_KEY',    'h)>pd;PZ$=a30PWUNZ{>A-68U8Uo xsPU+^n8S;b;N/^f(DAE3Yh<cF.tHHa,i_P');
define('NONCE_KEY',        'cUd0} i~h*BCd4j[6/]X8U+?W1|04X`*_h|2Ov}`=X]B<,InJw`=x=>Zt9Ik4GW[');
define('AUTH_SALT',        'H@n)rm8hpCH}.4%[&@S,OvZYibWqmXsLh9y6,zsscCi*|#3eZk%?*sBK@SuMRA9O');
define('SECURE_AUTH_SALT', 'th?HcCzNw,`l2JAp1$YOuJK~3e 3aV?Fbo:_9o`+9_TbS4CYRL?=oVZtC~zKSMmc');
define('LOGGED_IN_SALT',   'I)@zYGZ/wA%]^$Pb(~!F>p8Uc46CosXJ[3m#7K3tGk4`|;]/0k<dIrp:r  ]6:eq');
define('NONCE_SALT',       '.~6]_l!ifnec 0]}jI$mxHp_0x+v i{J:ald3R]TaY)Wh[0:URoT$#`dNg8oR#L7');

/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';