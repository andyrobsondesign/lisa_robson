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
define('DB_NAME', 'lisa_robson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FYX% V*!JX4F.:cA597^c>fR#~TQDBlK#*;3$,H4*uJ~8eKfU?.($JV$>{Z 8Nbn');
define('SECURE_AUTH_KEY',  'G)q }!XVA+lR}_QpD{y6}vr=jVyB;n%v$DsYSxh_}Z=f@S[U8MHSeSVF JE$n_|d');
define('LOGGED_IN_KEY',    'L{WAEZ$.$HEF0-#t[}E,<{:G&:Ns%E+noC [KCIH vks]`T.IVple=+#tg>:Sp?$');
define('NONCE_KEY',        'F4c]2YZ)cxxS;<Y $-E39y7)>vrd:i:(nv8Mo0aV*.!!+PuWrKiwuh40|weYi -!');
define('AUTH_SALT',        'XBO~O>6!^3P ]{JXGTQCw?HcwiJ758eCEXL4-hwLfZa5:Y5bno(Uj!8I{/A44=x]');
define('SECURE_AUTH_SALT', 'Q^V,BTw;&ZStJK3aWU6^,.4m1T=MdC$/Xgns|vQ.ft(Z-?vd4Whsp[pT$5SYHBGB');
define('LOGGED_IN_SALT',   '2!-M7Li)2:k:FZvUlWN%@ f}hxLObVYpA9,$7xuq75%0T6O^/TQg@WDi{Pjmr0`E');
define('NONCE_SALT',       '5k?eD]@]$DYsw89,#ptcOjYIgr<z[ bG2t)u?20?D%fujb~&+u0q@W]vSk|9WcPt');

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
