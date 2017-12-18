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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'skate4life2');

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
define('AUTH_KEY',         ')qUn-+It/{YG<p@u;)NK%DhII|0hHG+#CMxUrznTDz@%S+&1d:V-hG&$jRU+bg<P');
define('SECURE_AUTH_KEY',  '&WYJxeLO65)^t@ V6%Oi!sNK%9(GG= !pn-NUI@yqJO<EtJ*@^|mSys`l7!Q[nVK');
define('LOGGED_IN_KEY',    'VUaykE?@b@eC]$#4$&e1ggqq<dWmMl~2sC[9Hj6{vSXi!9K%TUZvIZ@2z78`6qsB');
define('NONCE_KEY',        '9*^&Q,p;a@ I-K~KrL-)wjOR+2_?t7wj1)Z5rfSJ|-rZZ,.Cm+#t.::S>oQqP~.{');
define('AUTH_SALT',        '34WZofuk8*xwM{!>ye&W|U9ap6z.1H$<awS|R7PflZiUgc<#eHQlK3?zf4U*Tnys');
define('SECURE_AUTH_SALT', 'y$(XS#/Bu<h!Nn{tY?(kL9Q2)/c<ldsDYuhhrU:5(:2nO#Lm;TPQ+UWR+P2hD^Sg');
define('LOGGED_IN_SALT',   'z#ZyL/L)8J]+(f0c+rr~eA3mZ^:6aN~^.zdRKuLMZ4Oy)R^U,l4@18>.e;AxfZns');
define('NONCE_SALT',       ':YM+rc_+6kIH.r<zp.Z*-YkZ.Ozo2;Qdir#cMPy>v&YHa%s6$+%@)i;]5j|pSHhL');

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
