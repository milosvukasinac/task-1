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
define( 'DB_NAME', 'products-task-1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`(gYx) uyhjObA}}!.^jCp9w+XcgY $1c}M` 2/wGV{yollOHjlif{ECG6vvYvga' );
define( 'SECURE_AUTH_KEY',  '=1/FuYfD&XaJ%m+g(T(OJ?&,ze.{9mPyhJN|KnvK[tQJ00Q8 b>9c:,A3Y#C=*UR' );
define( 'LOGGED_IN_KEY',    '!AMY[z-;;zEw/E{NxKXI1Nq1=%)#|DboH.u7~81fzrqQuLb&vnOY|*g<$KHX^R=D' );
define( 'NONCE_KEY',        '>&4Z$FxU{nhZpE,}oTEPeN=aZY?>I?og-!A}|[E Ta&jbsZM(>p]*9*n^<-eQ6*a' );
define( 'AUTH_SALT',        'C)G*80eh+D)@ZM=bt2sbmWa;u$`16=zW]F2LS+}:2K=&tR9%hA1.PlU?%a1G5(U:' );
define( 'SECURE_AUTH_SALT', 'z;T+Juhr|?zG+mTEgat25Rrv_Hzt<~0XC6!&m.RUK^]r,]N=>v`H*0DKJhu^oqE0' );
define( 'LOGGED_IN_SALT',   '#]NrWL#OQ-]7LKCBEA]^a:)Gt}fCe~Kd`bc_#+u]QQsH~O-=RMfJ8>k,4ZQB~_9Z' );
define( 'NONCE_SALT',       'NM`jwLdb[eZuW, sq?eVJXmhrksPe9cBdaKP?ccNZ!oZWC5D|K5usmj.<,o##KBs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
