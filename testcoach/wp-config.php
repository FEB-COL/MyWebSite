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
define( 'WPCACHEHOME', '/home2/febcol/public_html/testcoach/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'febcol_wrdp2');

/** MySQL database username */
define('DB_USER', 'febcol_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'nesXnFJh7q3pAps');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '>e$#ttx?Elt-jhRUWd*;mui4FDu^sEC0:I*D|Rz-LooEv~kSYV!Itbmw|!HegG(o');
define('SECURE_AUTH_KEY',  '<:lz03XPky;^5A4mAnXu2ZAVOS>6V2Y\`7Fisw\`vO_=fbX32Tj^rj9-=5');
define('LOGGED_IN_KEY',    'FTx;|*zSCk!iUmEsfNrC9F?aZ1mO;zHnQxp8?y#B5()xM7N5ctp4aV#^B_$O1kx2G8l');
define('NONCE_KEY',        '3qD~I!tZx6Fcd88y1B0^FJeOtMv\`vhpR>D9hXc3H5ZvSOT<o:FYNWnN?UCcT:^LlgQN8;v#SYo(Y');
define('AUTH_SALT',        'c!ioDP=gxYv3JNs_?5B2|@;5Q~-kTZWfZ6B4t@=4wXyf^8~0vP$)eFu~R2aH~jQD:uD6)DN');
define('SECURE_AUTH_SALT', 'L-d/iJefuSeQ294TL$e;4nt;PYH?~Gow?)q@JWLA8#m0/|TL>F|MuQ1G9?QMtIAz');
define('LOGGED_IN_SALT',   'G:#g@8a~0mo2JL(=08zDyiY!S0!??tr>0#W^Cs*(KBtx3Ln@\`j~AMzy@3z1y34h\`b!eMz41F>A|soJY;CwN');
define('NONCE_SALT',       'N_x@\`Z|eM0ic^QdQNxNZyB3CH<^):lvdTXmmU_TcM$G)Zuqo_$zCHtCE/sp9htoz');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
