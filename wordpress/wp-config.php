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
define('DB_NAME', 'dl_ejercicio_avenue');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Hf*z3?N`)ez 7xJ_iG9!<)l|s_$|ov|z,&gYonN`vLWfy~t0$lZgV4Nxh-GhC74=');
define('SECURE_AUTH_KEY',  'u[Om1U{VK4*oq[eEN!Z8=qj}S[ek}&^]+jH!^o+ 7a,9)]YI2nH.&Xj5)jX2zL8t');
define('LOGGED_IN_KEY',    ' UaN(<#ePn|8;uV)9-a[qXM[z&Ic*3u{SEMc6wnaS.@o{btXNkv`8Ze&O$3+q&n^');
define('NONCE_KEY',        '2f/[;ReBtXSvIXaBMHp{9v;6uVWDh_MaHA)+Q8c[gGx=_U^>v)vkh*7aQF?Tvf]M');
define('AUTH_SALT',        'yim|&Lq@)<YUhJ9`Pt0:,gE7~CsGw*,k$cBMcZ:!_$yf([a%kY[|AH7$::d]1>`0');
define('SECURE_AUTH_SALT', 'M;BU7l9fK)Mdl)SKZp{k]I(,7>_5G~U0]ZvBdu:=)|EE%fGT7>&(n1DKgA8pHBIU');
define('LOGGED_IN_SALT',   '!NS36!jGh+?Jr%%v^k8ZhEDyn?>?(JMO|9vziAZqs]T$QKMMy>Rv>5L3$P{QM=&R');
define('NONCE_SALT',       '?i0a+9<4yO$@|xbrAlZ]|ZEUMK/H@|ul]S/<k8[n2Lwaf(vM64K}WNtrfNE:Vq&l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
