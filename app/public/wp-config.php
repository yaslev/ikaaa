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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'rahdLFsCL57BVc3m7ASmdubgFjv68tuxuTOU0ZtL/D7DLQu8s7D/qyQHxhEDjlO1p+ZNrZMmIBp0LR5sOQxYzA==');
define('SECURE_AUTH_KEY',  'ZPJWNpUG9JE3IWnGbLGqBWlOCXq9FyDalfCidi5BZmCBAD0jxE032NT+aGwHXkx7zYKhDgrLwK74a62fNn2gnw==');
define('LOGGED_IN_KEY',    'Rdit83Ww2YmkD0Yfp9o6wf/5qyakcLmLwiRKqSt5sauwInRaYJhkPICK8O8g5obblv86YDaqSgeW6hdFG1P8rQ==');
define('NONCE_KEY',        '3gqT+nZ7W4K9427HPBdPdb9mfu0GNpiLEdvwsXKdEOrflVE9eBK4W01CpgruE+wjJ3oEEuVV7N54pRWy57aEXA==');
define('AUTH_SALT',        'U7JOcrbhRqI9wrDnlZij130ed5j8lmI7ntjHEPSaypb1hJSLvbvGQaoKjF1lgPL2oz04rljsMLW8UWMh93gmRA==');
define('SECURE_AUTH_SALT', 'Egd0T7u9pf4S2DvLAAuCI7zdGgmRk2R/saNPeIsIq9f66X6PAwCBKR+cK48U+5GGCtl8b/lf/JHfiHJfLdcsmg==');
define('LOGGED_IN_SALT',   '1BVKIidrsn/260vOZNjyGoy66ba+EU08B4N2sOgF6G1NxDLmFs8J+Kq6uZvWCxoHD1BBVNja18PSjzqXSVSxDg==');
define('NONCE_SALT',       's+I7ZOItcu0q+CgNRaHRBZ2dyl1hE0TSmxrPH98Ak4/puPbFsGllcEjLRCLSBb78pD0lVammKZGFJ8jJiCY5Sw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
