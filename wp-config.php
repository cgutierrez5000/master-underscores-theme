<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'LL(i>JKJ63Fohr.S*XHHU!7cFIQ/ ]p~VCT#u#++|e4nyDBf{S7iWqEDY4xPdTcX' );
define( 'SECURE_AUTH_KEY',   ':Y]m8Q^n,Au;c]{8IP)968P.ZBEfQ=2bNoT7Wm<{jBpazL(&-G/-_(BqpO`L*5Kd' );
define( 'LOGGED_IN_KEY',     'v@R^>yEo+kS!M6l<,Ss:%*y2.5C2[<Ywl$~4S~qih5Pgk=:>oE%g40>B;d!3w^>*' );
define( 'NONCE_KEY',         'i._(wz9^|N_4-T-) ?S2H3:cF/ PP~kqT/*feZ;D4@L!;a:mZm^R2bvm9`y !0;?' );
define( 'AUTH_SALT',         'MS6XQPVy8f |.$4UOM,T*P>[$Y;C[g`&*E+gT}fEa*5eC-_H+En4DFR_`AN|Je0s' );
define( 'SECURE_AUTH_SALT',  '??$$rY1?3EP=ssJeefG!n%1!<{J;(Sol%rmWp@XCV0[agRzf<lLb,r})B.;9EG4J' );
define( 'LOGGED_IN_SALT',    'RH5;;E+d-x=pe>8yJKn,TMN+@^p9xpi)?JNp%]Y]2K9w~O/4U8MfbD#Fz4O0Qvc)' );
define( 'NONCE_SALT',        'BZ4m.r6hX=(nhjUXG..uqDUj`^{/G7GgrRy,;v@d23.mMUdn.92AQg7F5oPVVx=@' );
define( 'WP_CACHE_KEY_SALT', '>o&&sHZW?$bSQ}4k!,:luq>eLU&`1{YW*J$wcio)!ac[`n*P`=hL3w8Q_y-)gNvx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
