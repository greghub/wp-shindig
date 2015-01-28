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
define('DB_NAME', 'wpshindig');

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
define('AUTH_KEY',         'W2}iWZ_-` O$ZrW4[9y2Y(X;GtE77@c^5Qr0K9};{LbCCC{_6<E(kXKu>[rXt$=i');
define('SECURE_AUTH_KEY',  'adgGkt~e#3[/y.&FEJY//-^lw]Nv5Tf]JIB$7Rb8@x~GsglT^l.p7=E_MCV,|+MP');
define('LOGGED_IN_KEY',    'UZ[}ZgRy`P<ewth&1a-`W/e)GX3xAy5FGE-+>q*[0.;X ;G:5kI_]KC2F+}@q7_^');
define('NONCE_KEY',        'rL0N#S{DG@S4339ugu)f~:Cet(4Lu~jq0Xem}0g|xfy/ybWy&K~mu:&R?Z dGDV$');
define('AUTH_SALT',        'jtP#lhEFBZBF+]/H?NQ+P1H#<tj*c=`5}O}j|ycdvlrN>v*rq-?M6BvkFN?<|)lD');
define('SECURE_AUTH_SALT', 'U3W=z#:i5Vll%;*9oU2Hq,.9;64BD);y<PcQ=Ae)2X3fub^v~k=heE-2.Ih<mEc6');
define('LOGGED_IN_SALT',   '=IkM4uqJ+B=Zw@)+VQ5.)2M5(p#bqqp $-@/:IaE/V9mjQ8kh-Y<|zz)NDsN|>A8');
define('NONCE_SALT',       'Q$|4M|a<@n)P`NopGqot#n7>@z/,C6DY4KQz=$>pF=f[v6FHgO^14z3Y@2xDc:4]');

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
