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
define('DB_NAME', 'mlmmtgle');

/** MySQL database username */
define('DB_USER', 'mlmmtgle');

/** MySQL database password */
define('DB_PASSWORD', 'a1A!s2S@d3D#');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`t=oAQ&7{h;mgPp/fs<o-(5!h$wrz4[!13!I)h&K~O_@ixRW;i>eI45vUhF/n(~e');
define('SECURE_AUTH_KEY',  '|{IIkn:DHi2lf+{buLy]X,*Qz-cmU+RS-$&muXAuP$Ztn&7jp7w.AsF|lwg_NG2t');
define('LOGGED_IN_KEY',    'Cm[A&a?Vb:O[_1p +<0hek^;piWR#,.&ErH|fQ;F3C1E@LAbh6sp$%7vz1saTr5C');
define('NONCE_KEY',        'zft4g[|_opiXU:.yh:N 0L$Fw.1Zx,~dNp;cdLCfuP_%,U@MEx?]6(C#}o_1_54x');
define('AUTH_SALT',        '4gjzMQ!eW/MSx^#3r akm7>mBMXY^^n,<TGa|4}WBEwcQvkK@ioH&|zLX[(LB0pq');
define('SECURE_AUTH_SALT', 'WDiNoF[2hj1ul1ym8s8g4d/0TmMm@LDo>WwqSh]LDfmIPAx$.}5`S>t<6a-tx_EV');
define('LOGGED_IN_SALT',   '2aM34v6_O+ZBM ?`m8Z$]5RLB-2iN.^w:RMpQ_lq|E&%R)IjnZSte.$fM+DX%A M');
define('NONCE_SALT',       'Ayc;pM$:dn,>ym>Rg_}.Y;JF0cM{SWG@/<Yy2`vT+kfk+F-AeI{&I}8Z O^;zn|S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
