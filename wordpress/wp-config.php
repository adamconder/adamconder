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

define( 'DB_NAME',     'adamcond_portfolio');
define( 'DB_USER',     'adamcond_adam');
define( 'DB_PASSWORD', 'cFjdCpBzRquRd2fFZmTbm6q' );
define( 'DB_HOST',     'adamconder.com' );
  
  // Overwrites the database to save keep edeting the DB
define('WP_HOME','http://localhost/adamconder/adamconder/wordpress');
define('WP_SITEURL','http://localhost/adamconder/adamconder/wordpress');

// define('DB_NAME', 'adamconder_wp');

/** MySQL database username */
// define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'root');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'sUNQ~zO3_xi*D{+kw|KQ_E_`A[}YWRf?Ny}y5f00=H@,:3|q9B]`s!r:J dz>z7+');
define('SECURE_AUTH_KEY',  'GZw3S=]Bd+WB!S{A~!wl|;ytoZc.!5}T]1)-.[+G/6oLA#uP~V/<z<)^;*BBCoSG');
define('LOGGED_IN_KEY',    'bx7!KPn:A*x6YuCjN<*ys7HQ^O`d)N;Xd2 ^&fe0K^LeD[Lk?JUX34Bc,?V4{`?Q');
define('NONCE_KEY',        'fW|T`%#Q3-30##h&iE-><qlA#xT}&(Vj?$sYTecT*d~B(ppH70EK0Vpn+Kq501`}');
define('AUTH_SALT',        'gCE#o+R.r!:[1T336GY.5/Ht/a3G6 D(?q|+^?HU|+;$OB>`wYu0xmR!Sgf6{SCx');
define('SECURE_AUTH_SALT', 'J28;Nbr9>H!/,bm.Yj+,R=S2>8(oiu|oyD`* u_J)--b6kGs!%z=m[8c!ys,S11]');
define('LOGGED_IN_SALT',   '?{E;Iu8-9!*Umnii|3||+#t_Nk6Cc}SQG1IL4Mwe,[HxyFw{.gEe9qf%X<WkU{K.');
define('NONCE_SALT',       'R~mGu+uk+;q]u-6w_e})&xmtuP&M|f`2%iQ+5q.4CxiOb5G`D:r)vhJ,wEe5oncj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
