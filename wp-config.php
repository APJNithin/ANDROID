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
define('DB_NAME', 'db718971221');

/** MySQL database username */
define('DB_USER', 'dbo718971221');

/** MySQL database password */
define('DB_PASSWORD', 'N=4u}8TEQuE5');

/** MySQL hostname */
define('DB_HOST', 'db718971221.db.1and1.com');

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
define('AUTH_KEY',         'R{J|-1}E>2Ylq$cSnN?J@kcs+KyDjw*KZ!LkL>&kz,|L}ch0Q@QbLl?<G$Y%U%7.');
define('SECURE_AUTH_KEY',  '8(-9w% v5N6b;Hw}R1ZBiel3K^M+Or+m_U7:KLa7`+5.>QYS8Ku`+&/[4@LqL1g(');
define('LOGGED_IN_KEY',    'MXWF8rb&@b7X+`Ae[U5c^xlN$Qe-5^8W9xii5nHUNP u(2Cinsj=/6{i##zOJ|L0');
define('NONCE_KEY',        '5.;Sx&DV4}UB)Q2la|)/H^i7 i6j8D|f+qkL G!ERS-Sky@3KUD{TZ8Y=L{Sh^zm');
define('AUTH_SALT',        '-xYAIVUoxG&2Qad}yDT7:M*E;Xiz!}L;V5P}:01,)Bc&6Ej6cA,CIt$Yy3L*_[?m');
define('SECURE_AUTH_SALT', 'V9B2m~N6N+g|s|{gW9Z1CG9zq-&XC|2D*wz!.wXhy&1&ik2wzV1JFiY]VeWpwfht');
define('LOGGED_IN_SALT',   ')dE0~;~-ZoUR5SYG-g]QbgCp8D!RVERL`Mnd-|dOS^}FbBNuO|AI.+np^CXrLrGq');
define('NONCE_SALT',       'ol+Z{YoddV 4ey1=FZ)^i/(,Y7:$C9m`mjYR=P*!+f7;@QSOJ(e~h2,R L_q_nN+');

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
