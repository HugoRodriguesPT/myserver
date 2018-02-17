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
define('DB_USER', 'wordpressadmin');

/** MySQL database password */
define('DB_PASSWORD', 'adminpassword');

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
define('AUTH_KEY',         '=5gk5Uh.!QhN-<G{]{KdU;5i},1+-+I[Z.+eNQ Wx>v.ZS#Hkk;/$3S{d~jE_|-G');
define('SECURE_AUTH_KEY',  'f)$d3~O|gJA7n$(*C@FQ;KBQ{X;,JI[YRI`f-kn+]N@R|f/k9v/%Ie+U, tcu(1I');
define('LOGGED_IN_KEY',    '0tVa{4V1/R77I&]/r${~a[b6Y]KeZnak|.a{oW(F&)Dm:W%8/|^ToE#aFug:juM^');
define('NONCE_KEY',        '<r>r:eB{06PHFHH<9xRMVTI.`:1_h5:bg#n<N~st852170(5m`_ax:>N^N!-i6Vu');
define('AUTH_SALT',        '#_@,Kr!?hb/&N|A*p[MvtX[Pg7j,NIHz,O!$Fjo6Z)R070Y+JgC`]9T-MH],b:eR');
define('SECURE_AUTH_SALT', 'O>,##W*#}Y]7IZ ahf2^r)6`t07[k71*=p3#.Jev(:abjd:`S3`gY4ZJC~W-:|;E');
define('LOGGED_IN_SALT',   'L?Mcs]nG[R~-K-UlE5`tow qV-1+)`CkWBBnCsJqRf_dQGr14=kcN(I:<.VDh6sk');
define('NONCE_SALT',       '^!|C2bCqqrrC*-{;#nmooO!+l%vL>H,MYQfv9]IW,@`cB`,MQq#b.EF5?^l??bY+');


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
