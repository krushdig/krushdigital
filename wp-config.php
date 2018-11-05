<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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

define('DB_NAME', 'krushdig_wp1');



/** MySQL database username */

define('DB_USER', 'krushdig_wp1');



/** MySQL database password */

define('DB_PASSWORD', 'L.D6g9T03OJzRQHezpr08');



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

define('AUTH_KEY',         'mdPfwC7FI7kebmhPMx3jpB672sME5q4FC2E3kIcyUVjF8xZ0bGPLK4JOLOUC4voz');

define('SECURE_AUTH_KEY',  'KumwkYzAhhag2UkMJAlMwBkY62lI86Z5ufXufTOevPFy0Kaa4FFQCtMs3Y8owvG4');

define('LOGGED_IN_KEY',    'XIg5cySG5SZ6Bmg9XkPN9KctfGgywtDppKg5f1tdELUfrCPGPYMW9ZsoJRHctShc');

define('NONCE_KEY',        'XRcGS9ntnjeQhEoHfmuQnXqD3xHyYifG7ZZxuo5IucVT3EVz8nfUguPLOIgAtIYY');

define('AUTH_SALT',        'XuOc4TFjOUPfIewR2U5GepDkcqPlIYBDZF3r8vV0PiPTiQQBxyxX8QnjiBZ8gzVL');

define('SECURE_AUTH_SALT', 'Dzue9eNGPAUlPGEHestIxm75QiUy6mbovSZ8mJLdgWSPvjIfRtoFbPeTCZ0MsudA');

define('LOGGED_IN_SALT',   'F3qN3haGLx2smq5tNgCc4T6CMLxyhGPxcStMcqNpUsQR98pruBcWXQdhqKs8c8E4');

define('NONCE_SALT',       'fVwNlcxYMWkHpcLnyXYzInWz7gQNDgECxelgLMi6sNPjKRukrI7m1KwqFHFDjpSr');



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

