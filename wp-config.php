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
define('DB_NAME', 'wordpress_rvtile');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'norcaD416!');

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
define('AUTH_KEY',         'I!v/c}q8,Q)NuYVv-%Xyv Y84+pB{4ZSLlUOA>8*w&K}*3oth.>,f00WMEjHbe-#');
define('SECURE_AUTH_KEY',  '2=?xs@At+Nwj+L1zVTvw>;4|k2qOX2P&0Wzy=<DP>H3+Y|P% 9=RSVLzO++y |L)');
define('LOGGED_IN_KEY',    'b!]Sw0J9^Q:z;eg)k/egm1?ZYdqxd&9%q}0j?fyKhL%T>WUiM9.yXa4mw;iIi#zz');
define('NONCE_KEY',        '28SmkRm!^-hcQALzbCe0M>7eoKl~lV|3`Jc2n0=L:>/8]f)gyG-9,v S`0Oc-MuV');
define('AUTH_SALT',        '8~NYy[nl<Fw.b+0n?/amP.}eH0eZ:q2PmqYHzBbCyE,((]@wN:Sd9RM!.,vzIwr0');
define('SECURE_AUTH_SALT', 'L%dcMVbA1-JX KwZ:_)RFqN:*!cK.!%e5gK!~AoN@2cnCOrDhR4~WF0NdN#=@qw;');
define('LOGGED_IN_SALT',   '`NwxC1sD4{IL&@K5l!57%W 1Xa&dfz5z}bV03$y_ FjS) T6+w-Xd}T#jTT.-6vd');
define('NONCE_SALT',       'HsYgd)-[98RJm:}x$&A%$YE*?]0}%Fo%Y4|:iBI{`2+[,Bfo9U(|B&!pLC2)5&%?');

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
