<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

error_reporting(0);
define( 'DB_NAME', 'reyes_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'YT6.%i<0`I_q)-jA]Z*MgOM5Wme1Ow]HfsOTAYji{wf;dqyh$YtYo)GcQE]]k+R^' );
define( 'SECURE_AUTH_KEY',  ']QH9*@BW=i=}+R8xo.!}32zJB)$:#gS4NvYHYJ-q [V!V7z#iDm{)Pkg2VK~60PR' );
define( 'LOGGED_IN_KEY',    '@6%_~b19e,y58.#hc*ZVW%+hKt=@k*K.Ul#Er^P$u~Cz-N3IxtlKiC$Jtx0T)y*#' );
define( 'NONCE_KEY',        'c=qP[q|>#0&QEi5Iw[laeXM 4[ &tvS7cmUyx.KBZ&&z#ghY:Eg1k4,yzE tl.f`' );
define( 'AUTH_SALT',        'C:Z[c<5Pl5WKZM4lWn(<uOTG ^<U6:G~^*#4^Q{Fyw65tSa7UHC41M5&a-U?=:q*' );
define( 'SECURE_AUTH_SALT', '#{]ZEL$Guo6RrNZ)tt0r)?|ouszJ +cw(7=Uq-)Rlp!`Wkp5K3<NWi}<=HeFOx+Q' );
define( 'LOGGED_IN_SALT',   'H7O 3>SAAi2qp8Ma!M<3RFFu2`@l2L/M.B793EH-u17AE*.uWY(844SjlL(kjUDO' );
define( 'NONCE_SALT',       '$P.1Pb6ma1?Y&RYU2@=UIDOuo_z(oFZ}k84eFGXx{/W{?5O:2C9d?fW>H:Ep7M/D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'breyes24_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */
define ('DISALLOW_FILE_EDIT', true  );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
