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
define( 'WPCACHEHOME', '/home2/febcol/public_html/blog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'febcol_wrdp1');

/** MySQL database username */
define('DB_USER', 'febcol_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'tiim1bZoUImzgvfs');

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
define('AUTH_KEY',         '8405M9Y3NI|x(Gpz9m;/RrTC-MJVFS4dJ2;Vy$OK12O3Y-~_uMw;KNUjz5rtJL1K_NKCeVd');
define('SECURE_AUTH_KEY',  'M2!;N-oGwbHF|hIJkXI3zzByBK>:kW=)bRIwuZqXN:FI>$<XrLI$b0tBpT*:#');
define('LOGGED_IN_KEY',    'a>v?UpYY?N!Q^Xabnom^2(ow)k~rpF10B-XDrR@rpTGSl(J-urx*RYjvOSAa0l');
define('NONCE_KEY',        'H7jK*P)R)aS~$9Y8=GuQIh7D2\`TgfLwH~YJEVU!YxKdF;*V0v;z^yvrZf5IcIyk6hS->LK!^P;g');
define('AUTH_SALT',        '9o/dY|R*=p~IjYkAL3Uj6hJ7IYK(?$:\`R:>7gS)_tjXl3\`w|f(al1x1gmXK(T6;Zp');
define('SECURE_AUTH_SALT', 'L@WoJ$!SGpzpoZejCI~3DayID7qqFD1MBEg$x2*d~Gk;Oq:xEQ#x8tNQ!');
define('LOGGED_IN_SALT',   's/9|n_BwHeMz:MGq9RjXN>ymJ21h_>4$0VTtXU1SERMUQwNJjUltC(oC$fr|*N');
define('NONCE_SALT',       '0cZ$fe#qt;1WwZExA>hQ9LWNMNV1tgy|KwVFZ0!5Wn\`5=45y=3T??;!@S!9-)6*rl@f$jp');

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
