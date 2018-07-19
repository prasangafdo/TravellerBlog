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
define('DB_NAME', 'travellerblog');

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
define('AUTH_KEY',         '[[)[vlzWy>Qo/gHhK/}S*<5lLf-);YpzJGr_a}t,}i/gd_/+]ku$+VAceFl$nZLU');
define('SECURE_AUTH_KEY',  'EW7P~@c~&xj3 +Qw~Gaf+A=NArQo6Jwi|KzdZU&OnQ,iO!c9yW*XZkm>2.ItgzRT');
define('LOGGED_IN_KEY',    '-b2HK.}mX<hqN;g^ntQDo5rHm8Uogx_dUa<K1$b? wm)% -I]MUh0PL47./9Z>Y@');
define('NONCE_KEY',        '[`fH1=dpcy@Vxyksj1Wc++uRd,lD2DCPI@_aXGpo]=U4du!L]s@*v{]LVP5 mX;H');
define('AUTH_SALT',        '(7rD8nb]Y;di(06uKoOfmokKtGWd*S9=];*&Hn71>RJ5QwPRyW8 f9F~_-@(VwCy');
define('SECURE_AUTH_SALT', 'T]%k3WR2Hn&7%om+@s^dV7B!]r^;%![0r=fx786^-Y3aFlb=Vomwr<J*)Hn; Mj=');
define('LOGGED_IN_SALT',   '`taRkER;GzhO&j%^cjg~+S;PA/$_%4X%)$a#XR4/ih{BtKE7DV1DKJ-glz5<I(G.');
define('NONCE_SALT',       'N[+`?3}RrX)0[ey%AX]q[/w6_-<7C<-+Wdpp8}7F)v7Q,Q1qrEvI5d9/Ri,Vek,#');

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
