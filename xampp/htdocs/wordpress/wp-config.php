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
define('DB_NAME', 'db_bull');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[GEn?RyKQ8@<T,-JJq.(j[.{g?!R^Yh,)kBy}2SV[~hciq6sC*MmMl1(j0*_R0$w');
define('SECURE_AUTH_KEY',  '/`vFgA.YW9)xCc2PbI%07N0ln~22,MCi<J.?P&D+!=dfCE(>1K8fG^ua=$,+[C;A');
define('LOGGED_IN_KEY',    '!A>P[.`JEKmjmIHWMCW%u;Q#NWU]:u]I(~ +=8j#(r&[e/_BQevp6aqTkiY*{^/+');
define('NONCE_KEY',        'Tc u:2|b%dx>>wOBHPBD*-w+M()9mJ!rN%iQ-Xw;RXREMglxsdmy4oC+{|UrrtvM');
define('AUTH_SALT',        'P##.+|;CDWpH9l`zpcw-NkSbhJ^MQh&{Yo4X3O75r+|JEoj[QWFXKN8y&]r!rg1y');
define('SECURE_AUTH_SALT', 'Ay!&1Z0Kf{sxTp4}tobOBgf:,JTk`iEjIlDy.>Il[EszYx&W(9a!&hGk#e7.6H*S');
define('LOGGED_IN_SALT',   ',2S[;srhA_.@lDX/0:xr2!NG4N=B=qkh|A6@`sa*+|?m,3.RP/h6kP@@@Dkd^LsS');
define('NONCE_SALT',       'wMu~|W!^WG6w!R&mF,`E.2c]LWk%i7OD@06qlsI5)z>h9bKl~,`QY;z},%wd]|({');

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
