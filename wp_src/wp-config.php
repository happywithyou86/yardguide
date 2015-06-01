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
define('DB_NAME', 'yardguide_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'PwJ^(+u(IN7$?3.[aG9Tx9BYV^:M!(fV|zJ;S_]*RFgow2?qum{f&-|eMU|;?/pC');
define('SECURE_AUTH_KEY',  '/)y|t6#a;GPqvz|+?Up~nr,?ACGYrwcv)+7m5/IsT--{7 x|<t kTd2F`gvs`+ /');
define('LOGGED_IN_KEY',    'lJ{L *by~#SBd;0lb<PZo--!Z$A#~~z$U*/]-,70[0GOa%y*o=>zx4f}}UB%oO&%');
define('NONCE_KEY',        '2vP[h/2RVM`^MGYV-u?pJ9,usHe|]x_|<v:x~%4=E{<6WKJ0las+,VSm@Nco*M&,');
define('AUTH_SALT',        'U7&[+#-<|W4:X7YGX<IWC47H.+[-]+qdd`@k}/42 3p  >DmiV}mEBB-vxH#[Y&z');
define('SECURE_AUTH_SALT', '@4;5}--# lH]:R.Xp}T%uNp7 Az6ul3+%*|=HvOF|i4t)8pwbI%D`R)wi~=_1?-R');
define('LOGGED_IN_SALT',   'U6 s^nNFxEM;yy/CR^vmS14c*.mdK,sn!3qzYR2[ni=&D}LoRfR-Wu*k!xASU{RA');
define('NONCE_SALT',       'mZf?*SNw4w::s26~pQJJfDou Gq{Do(8~B8*:;C}Dc:jfutAilK]D4>>ft7r7H=p');

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
