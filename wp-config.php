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
define( 'DB_NAME', 'showroom' );

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
define( 'AUTH_KEY',         '~QnUO<~C4(W`d}d5V%x@0[0{G;6xXyweM!]y_/OCCn3~+@TEIvx:@Fe6$Yhu0H6n' );
define( 'SECURE_AUTH_KEY',  '>o8$byqDr~$fd}@, nBXBZAje^Ep*+pQ8i$nf^Q6Ns-{DfHCpX][!u}|BLd!qZT>' );
define( 'LOGGED_IN_KEY',    'IXru~#v~v$gj=J5Iy%>2^e8A]ty3_nkR6zT[eG[(>(2y7B[<xK&@MfTHxQWpVEDa' );
define( 'NONCE_KEY',        '>q38S7vFt`.inG+|k% 1RN=X; l[.uCW!d1zl^!LXSrB`R&SVxR?jr,IqesgW%|a' );
define( 'AUTH_SALT',        'E5*U*;#PmMh*5?:{NW_a8+lThPeiZ{vt.%R-G;tup<YoQy7I9L/dtzno!Q/]uaUb' );
define( 'SECURE_AUTH_SALT', 'K@K:gP/J3Q;}FrN*PPX|5PObYl!jiY`/k~Bk3~nRxp[KIdpC`WJ,5&QbPjP1sd|!' );
define( 'LOGGED_IN_SALT',   'LTCqRWP$IhrzcYv*?QKS!xS-7w;#aexWePc2$PB4qBe?kcC?ebf&%#lbzdt3hv&=' );
define( 'NONCE_SALT',       'scM2$=F/Hp+JJJ:Y0}};U4~~og+<;|{?3eZIW_b+0zN~-hqb{7rIbD6vi%XN&uw3' );

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
