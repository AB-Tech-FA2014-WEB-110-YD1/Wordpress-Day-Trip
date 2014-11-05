<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'yeu6t}{4pSH4}e-7d 666v@r!g!?[ry/9OuI[BR.swjS?re[,-1;+S a=5j+H(Xk');
define('SECURE_AUTH_KEY',  'YZ+s-cBxRO:V%2Xmu-|o$1U%&-K~9c~BF+0Jyp$M!kANpv4dPLX~uLO]J7$&=p; ');
define('LOGGED_IN_KEY',    'PXc`$mFjML&UW[Mn[p|Oc,sK+t5sZPEniw jJ#0S@bl#-voECAHj(`l?L<[Q|9l~');
define('NONCE_KEY',        '1+NvNg=2CCmF-uZ#$ysZzk+wK41DR4rSKR-DH5*uRKOU+UP|FH=wAkaD(ilso<Cm');
define('AUTH_SALT',        'T-iAsVCAkh[^+ ~V}9L; s;YI ;+L-{89vk-6vQW|,!F5ud-:3{4~0qnnSxWS)r!');
define('SECURE_AUTH_SALT', '])4D18q/.-mBoNltgQ/~IY{YDNRK!Q+>|VBB-rb%)n ]j>0Y8*g+:tToC-kKPQ{s');
define('LOGGED_IN_SALT',   '$|$:eDF!ccO=0W^|m{$h-ml2OZZX(t63<RKY7GZAiK_r:D;[0z%rlFOP[D=rz)9 ');
define('NONCE_SALT',       'kFremggET*;|-n]Hq_7+w1t^k@5eED,|hb_eD,ggAUQ]cPhhQ9x,Q/2!~+|XJ!zq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
