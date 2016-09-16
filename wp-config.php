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
define('DB_NAME', 'nor1430006522193');

/** MySQL database username */
define('DB_USER', 'nor1430006522193');

/** MySQL database password */
define('DB_PASSWORD', 'p7M#XW8wAWB4I');

/** MySQL hostname */
define('DB_HOST', 'nor1430006522193.db.11896704.hostedresource.com');

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
define('AUTH_KEY',         '7m*QOGR&B5XC +AwxP6*');
define('SECURE_AUTH_KEY',  'C=)+PrK_2rx&OhpY8MBq');
define('LOGGED_IN_KEY',    'rk#2NL+bCE+R$PhBJgFM');
define('NONCE_KEY',        'TJYK7t$2yc4D5JbNGrIy');
define('AUTH_SALT',        '5vdaJ9W&ttNmY/L_+B8T');
define('SECURE_AUTH_SALT', '-d9T3x W!HTK0xH0A5QF');
define('LOGGED_IN_SALT',   'pD3YFbGMjgm%f!+bwRf_');
define('NONCE_SALT',       'RZB@Cz(Bd&sPxgwrrnVK');

/**#@-*/

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
