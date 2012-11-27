<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'geraldine');

/** MySQL database password */
define('DB_PASSWORD', 'KMnHbOoW');

/** MySQL hostname */
define('DB_HOST', 'tunnel.pagodabox.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T,;5Vf>I/05gQf6]CF;KB/Y7,x:XxLVZ/cw{DG7QDQJ*zd;C|n?k|r*. (oID&A-');
define('SECURE_AUTH_KEY',  'A6#}MA3l~#O(U)4O|9%@C[$-[Wg MPnSMfj?1nFQ*148ON3^Ep~NW4*o|6ucZR W');
define('LOGGED_IN_KEY',    ',l>Y}#cRAv)?oZ*#a`HN-_?Yh.7;*.=9iMU(?M%a-7t?2N|/jtyh7gTLZ:sn!]|_');
define('NONCE_KEY',        'l(_rY-k+*fH_dA4z_ezm` LuBjEP[e+RHTW65U]XM7F{8(t%Jd($`Y>`-7U+s@|1');
define('AUTH_SALT',        'zSY4q+LWm[v1ffpF<&q@$Yjxz}7^U4uC )ekS5GANuJ.:l(n-dRaqKauPVid-gXe');
define('SECURE_AUTH_SALT', '}|*y~l|?v++J=BSor)yLpO2;U`aQ~?:PSTLn0[jhxkZfJ&,,}ce116iYVjdZ:Ohs');
define('LOGGED_IN_SALT',   'jxu-K%~%Hx6a6GXrU8xg8Y06|b]kJw+bkB^zp~HX5|jqAMi0j*T3Mr<G}?a^~t|v');
define('NONCE_SALT',       'T+&|mEho|NO+-qQChr&.<U{7AE>y*f:U:t&q|x,l/X_$~QE%XfUt|Z=<!dZF.|6!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

