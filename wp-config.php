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
define('DB_USER', 'hbcapps');

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
define('AUTH_KEY',         'H ]-|)(UzHID=z-d8m&6T(Y9|<,KZ>fX<E(3=8xQHNsUDewmA09B-DJ/45;f~WKm');
define('SECURE_AUTH_KEY',  '9sfex[$(.Lyj%/ku?~+,:%U)bBAs}(mFMl[Te/wm%(c$T%:cZftAy8J:3L!W]&ga');
define('LOGGED_IN_KEY',    'p5cpyzEV1r6U+M1:e j(z_#`8LR~-s`1lOzTXHZA.J_D@/%lT9wC}SsW;xPnC>4W');
define('NONCE_KEY',        'PynE:x&y!)X3@s@>%IG5=FP9EtzdH0d@9A|D(!URw0>Cp&@r9uq<(On5OV*W{P w');
define('AUTH_SALT',        'wmsL[$qlxqMe!bFoI*4@oA~Jj6pl< u-R&foZ iRK6fBb1=:Fj?JK]1v*8wF$w&z');
define('SECURE_AUTH_SALT', 'Fec?Hm/PuiR^ DAyID`akN%l]=ll=AAo S5Z[_tx`),A(*L`KWRg(phjN;)f2jID');
define('LOGGED_IN_SALT',   'e@YF{i,.QV<OXNAQN7aoe0<;-(I`yyr$4wTs<mPag8O8Z-|Q/qxI_@j.jiA8<wl;');
define('NONCE_SALT',       'PY*Gd5xKehv3{zB.|):-cT~N@ ({2c9L1s{~QkrWI.h>*{<;bxC<YNB}XctR,~>x');

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
