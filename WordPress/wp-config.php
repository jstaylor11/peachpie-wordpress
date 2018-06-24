<?php
/**
 * The base configuration for WordPress
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'openup11');

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
define('AUTH_KEY',         '3rp6!$o7mv}K#oGYy,y@KItgTeA1P:]]BR8Zl4|61^g@;{}5W=z+|RfR De2[k(D');
define('SECURE_AUTH_KEY',  '5n~5D4m%gimGPEu}-eYc3Ia4lcQ1?ja-8 F}GoY,.!WS-Mlo[dMB1N!</ouV@wzh');
define('LOGGED_IN_KEY',    'X+W#Kloc+JJMgQXdlPE9i:Qfy}w@4;5#@Ew%*b7xJ#o;wWE6&SGh&7+LD1B+0a_Q');
define('NONCE_KEY',        '1Di>NW4Fd-+5/jouU KX^EG*l0MB(/V*W,,OyrTo*!sce+S`0zx)uC>HhpJd8))o');
define('AUTH_SALT',        'UhZKJ9G k5?9+yKf3&`uCoP]MY%|j%9:z4:v;/T}/g+>h9oZQg&OF:py(Lg16=M6');
define('SECURE_AUTH_SALT', 'o(I({O+-5Q|#(?x(a1^WoOP`fy,5/(o)<l>eTxM|O{/}6 Nq~T!H{AS5-x,|#>cW');
define('LOGGED_IN_SALT',   'P|-p8$v!IEEY1J7[A7KNwd`98K)+aR$%aoov;Bc+X Mr?DvJFOS57x`a)UqL&+tv');
define('NONCE_SALT',       'wWQ-CC57T#>pj8yy-P,M-HuoAT6b`-}Wg-o-9.~4XkLw+`y$_]r(|,Td<#U(zGFN');
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
