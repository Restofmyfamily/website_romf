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
define('DB_NAME', 'i4147771_wp1');

/** MySQL database username */
define('DB_USER', 'i4147771_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'N.o63y6gMTAEKm6pxmQ70');

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
define('AUTH_KEY',         'p7v0E3nvVA9kDWFYPdXDJj9SGGEvh7oXe8WSWnVqaZhhDNzVQiycerZ7MPGeKGeY');
define('SECURE_AUTH_KEY',  '1cw6bAYa3FMMcRdai4VctFHNgj3srHv6LHjtAJrHLWVdPqHifbvOrlcwjTUM8S0W');
define('LOGGED_IN_KEY',    'NxgHZ9e03bANkfKDpJjxXkpdRQupkLfko9BhAREZsf7g0pvdQkOnvXvwEbeTEoKw');
define('NONCE_KEY',        'RZhOFjYxiRiDudArE7yPPxA9y0HpH5yCrh8uXhuR7cxAbezc4ZGZHU25i1h37xU5');
define('AUTH_SALT',        'gwnndjzssPrODNEXU7b2CfKPfpKlVceIw7YcOVkpbzzLPpCspyxTM8zjo9X3WvWU');
define('SECURE_AUTH_SALT', 'T5LQ3py0ZvZiW8tibT5JhBtxFNyHUadWznkgDxgYdhcwk3ihd4el3Iayn0cLXXS0');
define('LOGGED_IN_SALT',   'EiaM9qrhQHUUUpFG50ijMLRx6UBbnuc610s0xX1ktWkzFibeTd3UsUySyCxvoblO');
define('NONCE_SALT',       'QbynsxEo92Cg1yjc2UOBouvl0tZKgZFecuGZ2FaotgXe5RrgYDd3DcgAUGUIiXhx');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
