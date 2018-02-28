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
define('DB_USER', 'angela');

/** MySQL database password */
define('DB_PASSWORD', 'Judith2806');

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
define('AUTH_KEY',         '5zOohF,&>)|/W+PY?dAQ[{EfZkSdAj.jgECZ%W)%N*fQQ(F4hyhaj3+,?ZY!xciG');
define('SECURE_AUTH_KEY',  'OP|tPE^~@$N{C /N>|oT7y/[}G<!1ecfvE[)U/%p|wSZj4,pItX&_@HE^/+Nb+oW');
define('LOGGED_IN_KEY',    'idJ<ewbo}s:@XN#nB4[|ke,h!G`M(iRX-K-QttU-|Iu,M7J}Q%iL!BxV rl$6q,?');
define('NONCE_KEY',        'n4|Fg},KXx9q7K>ZXsw@n8%^]ei^&0t;PD|m7#3rdf$7+p,/yl6Jx{8G@SbAEd?B');
define('AUTH_SALT',        'C0Gp/C+Q> _;j7Nz/Yf<L[1e7AvQoS{s;S}Oc=-w)KZ=ZBVJtg(4v#1plu}Rwc%O');
define('SECURE_AUTH_SALT', 'Z5-d|<ojrm3FQD>h<(|o&.$a,-83EYj3@U7rneIVDIFQ!t~48(Uyde/pd6)z&CVZ');
define('LOGGED_IN_SALT',   '+2f{Q#-+hb}OX?u-}N8zU6s dvj/Nl{PG5VQ$Y!BH3EkC_[+Mk/+2-*#5u1BiA2/');
define('NONCE_SALT',       'V#uV-UB)uWU8=)(x-Qd*vOY=W=z=]?:Z31I2T!vX-#M!M`zY){9#2fw8s]W-b/*%');

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
define('FS_METHOD', 'direct');
