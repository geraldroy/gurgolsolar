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
define('DB_NAME', 'gurgolsolar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'geraldroy');

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
define('AUTH_KEY',         '(x^u(y03U|u/HhYP,>$wq8t_ftttNxG/>A4Rqi`Z+,6!ct/TbBmV6@Ij{L!b!/rX');
define('SECURE_AUTH_KEY',  'D-M]k6v1oUgZOJLi1fv~JKKuPou,2|#yAL+t_jtZlv[DWgH<7aZ5^C^_zk-=|1 $');
define('LOGGED_IN_KEY',    '~^/JQrCAHSgLF;;Z[`*3jV/:lm[$gGMula[l`I3_aX .ingVya9]p4hOhBCE$~y5');
define('NONCE_KEY',        '%1Y^B{E<HR<{Cg#j|z6rkvhKvTOXhvy`eD)sW_D}Cr;mfM]%P|RlGA{mMCv[Vvuk');
define('AUTH_SALT',        's7H|?]fsnM=exsT_nAS;,($SSiMu$b.s!b34QFEn77dw]<,hy1a$Edt%s7?QKP >');
define('SECURE_AUTH_SALT', 'hh^v`jx(P.}.7_ugKsD^eN1,8wBN#XFl)^`~xjp*VgPJ?T8$t6q+POeTuC9HpHi}');
define('LOGGED_IN_SALT',   'fk9Wz%P>@S}^-bk*,[nc27Y@dknpHWA(DHxj(]R5wVtZ[{[DSiX_;2(` jt- 0D`');
define('NONCE_SALT',       'lASsg`uV`jUHWRk0(/F+dMedma_a{;Eg950>br0R2Et?09^<};tyj2B<7f*KUpv.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gl_';

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
