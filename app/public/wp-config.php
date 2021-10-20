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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'INVBht/ZQX77PJUQf/tplFhnZbRwtrK04NIm5WV5bd8kTzEfGD+FmJv+pkBQ7LVRlPkXKotHCuSNp+cxfLUQvg==');
define('SECURE_AUTH_KEY',  'djHaAI6BaiHXNf5LZ9Vwl/jZXNAkmbXS9zSpJjOvJpEZ4xfji4pf6yk81lVtcWWMI7XZmBZ5HN02GRBtbSj64A==');
define('LOGGED_IN_KEY',    'y/Z3JJ5VkQLoa1bEco8lI6Qg8anwquymfz5s3qQm9xB6k8mO8ydbj2cvpl5tQ7bG3Vn9pNMI/WgUcDzADqUKPQ==');
define('NONCE_KEY',        'f3MfZBEZfsMaaZAaLamnNzQnWwUWqChqqC777x7rcgm6LMTO/kbX9a7HBZCqO2U0CW0Iq5D4Vnd1yymd8WsYtQ==');
define('AUTH_SALT',        '9M7R/amwIuAHlskwqzDkzprj4OUvIL8WaHeVMQVmvQ6/pnZIELt4y0goG6FvTEj87AQU/E/aOyZDkVF4dyH0fA==');
define('SECURE_AUTH_SALT', 'x2iGXYlH8YqvxrC+jwR7TfFql4X2KLhB870hxJYwRLN+ITySshhuNsO9LmYwxz7QdtKHj/8I70h/zusc4sBv0Q==');
define('LOGGED_IN_SALT',   'aRfyYHrh0wIlmqB9siOaREPxNA9PKxdlhcFfFJ/hiffW8uAZsbh6MkH4/0YgfSacPgQ+P7PNQzfcXJyZsgQ79Q==');
define('NONCE_SALT',       'NXRlX3dJo+GHJOqpwI2NQyl7+R4JnihyEuzYVXQ12+C6r/khRx5bYFOSeMKXcy3HNvu5y0w/67xFNyqUf/fmuQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
