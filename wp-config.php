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
define('DB_NAME', 'wp_js_course');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'l7kG:|-Fl.L>S.yb3a>,~%?fZ(AVNbmbhnsgN>E=8>6vUL8T+r1+QwPG900]M-6O');
define('SECURE_AUTH_KEY',  'NFl0+R@T=s&Nu3gEk?%c4`f|a2SG^>_`2jTKX]>Wm*Sj(<V+@I4~6i(CUK^E]EM~');
define('LOGGED_IN_KEY',    'QnA&~h^W w@5+}yx_@>P*-r]_Z_kSb;ET-3k+cZ3hIA$9u{1()^f^*<->OTimsQb');
define('NONCE_KEY',        'L~hC3+KnD56&Z.zKm>0bE9Vp8h>,|8r!7IjwS;=%<@4>fgq+gmVHa9q;Q<Ht.~W(');
define('AUTH_SALT',        '`QU~mo69DUkU!&NQIAzcG~VvdRp.cw63:<-axYCs}D~$E[6>J^&5XMY>RYdsvpW>');
define('SECURE_AUTH_SALT', 'e^b>_@=NB6V+;2Uw[v[p^{<S;L|lHeX-)$&Fl]mSxalm5uQ|pZNh~pJB`S]?Y0%s');
define('LOGGED_IN_SALT',   'r4{)0myJV4B QGDTS37}-0A_<5.WS;Y#Xzu3<C6-?jw_|EyFVs/K(O|.>l,wmSl?');
define('NONCE_SALT',       '47,TAB~q|dL C2[Z|[bb^PCHP2iCAG6fftwGjrCSM1-5g*v}ScxE=dQkv16Cb=m4');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wpjs/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
