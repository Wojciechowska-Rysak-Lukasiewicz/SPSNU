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
define('DB_NAME', 'akaivel');

/** MySQL database username */
define('DB_USER', 'akaivel');

/** MySQL database password */
define('DB_PASSWORD', 'Dupamaryna123');

/** MySQL hostname */
define('DB_HOST', 'mysql.cba.pl');

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
define('AUTH_KEY',         '[+-D}7xk#O2bJBbck]##CBr?8^nR`aY%>jzM8%zq%svO$2lTOEc0$3-!]E/k-?Af');
define('SECURE_AUTH_KEY',  'l,bB<JOg?b2=z3@b3@{,3>/x}1(9W5y>m`I^@aGWtrO*q<]%|[VLVHntW(%%:swN');
define('LOGGED_IN_KEY',    'a0{5m~jZKgfUP0w==7om~6,RmNJ4hkMpf{$g^RdYh.<sInH`w]S.1 #zR*/>/35s');
define('NONCE_KEY',        'YV}jPO_O1z;I,%(~dtFgi|@dvw]0hz_zQ99a+DmHW~BOGh1_|t~RVaWKXsp0F0+$');
define('AUTH_SALT',        'x)m-LAZTK7*VjL,9|)t24wwHNO:Kb{5OXN{<Z^{1I6Mymv8iI)%}LK-2J8++dd9]');
define('SECURE_AUTH_SALT', 'g riN;.>c/sCady-6m`+ *KsX*L]@bV42DjIv5 M_sRccOtXws:u;@]/U<eE7W1B');
define('LOGGED_IN_SALT',   '{<A=i=2,QE`{i:%-#n=Y52cuRSFi^[A9ZE`E/Is8tIUOgL+gwS8Z#0X#j{+HFg`W');
define('NONCE_SALT',       '? {69ObH~XcF:K-I1Nza;ve?^we(j3s$3) rlOnfI3,/hSu(cxB0@1$ZR hN;gT:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';


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
