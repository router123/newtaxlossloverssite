<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newtaxlosslovers');

/** MySQL database username */
define('DB_USER', 'newtaxlosslovers');

/** MySQL database password */
define('DB_PASSWORD', 'pa55w0rd');

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
define('AUTH_KEY',         'q^1?XNy/r7;o|}?QyM${/>+Sz~UTW#vm=quQ_aHfw?x{zEbeO&i*,ta{dZAt#->h');
define('SECURE_AUTH_KEY',  'h8n~ -Y=0,G/Q,piXr5#.}oCcXta`s~hiC|7W)TW P-Pw[kdgR0O2q4-yz(>OMg&');
define('LOGGED_IN_KEY',    'S]Qn k|r.(e]^q0FE@NP+H#6w),XU0d*|HQPpB-6/a{8|RMs8$7.a%^MivF/G@|1');
define('NONCE_KEY',        'pu>x/g6NI[HmSA6b!H%3!eO>ZmrT=^7o@fxM|mL@q.xKfy?48RM*+Ji!UF6P(;2e');
define('AUTH_SALT',        '5f/hw+-;,a1mnORXjv1+NT4&Q8K*b,TMJl|knRl|+41|kRO!+Eo?.}kvn^l/BG/)');
define('SECURE_AUTH_SALT', '@hn1}h?K*gH{0_:8ad.|^wU0S03~a-w{s^(F/PQe+~R$;?$kBR2gr92B36#.28C@');
define('LOGGED_IN_SALT',   '*vKdR.x[K8IKR0GtRY:5h25PR/>54t8B|4J1+i`[6])r6Hg9R_M,C/oord/JX~G)');
define('NONCE_SALT',       'xG}w~z!+x>$~,?qMstr.g4|=*y_s`E$_BbDQLDa$Uy[M ahdCe4Ih:0U-n6j$;|b');

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
