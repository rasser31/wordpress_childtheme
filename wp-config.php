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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3p)@E#D;WTM,ag(gIML*V{h|mhE,$5/i3)Eo+#hZ]ArKUkW;M?v (n.$|j)tEsOv' );
define( 'SECURE_AUTH_KEY',  'uqQD- U;CKuae[+/F)eW%R6PFHQn7k~mnE2np 1y {V?$r^|wUcx-]6iI8dNml[R' );
define( 'LOGGED_IN_KEY',    '_:*^hMR42<+sBM#te+=j^KEKiKz.h!^-an[A.VdY-gD|!i!ev_]B%==I706~z6ij' );
define( 'NONCE_KEY',        'X PHh(ew[yY5!Ri~f5p7u=3 ;G~yfjbdy_rmW5Ya_c#SFjn6jQp~$60bCrH,y&J/' );
define( 'AUTH_SALT',        'qN4ccvq]8VQnBcF3aEHOV*>De?qsS}MwrN@z9C`0~?v1SHElb}$#hg.K2J&WR@NZ' );
define( 'SECURE_AUTH_SALT', 'sDZG!j!g+`r*le^3b|pg:mMc*fHj-$b/a?$=V8hHSi{GI~*H8G?,~gZ~dPe8iwKZ' );
define( 'LOGGED_IN_SALT',   'BL):/)pjf~qMYCgH^c0mOxQu)( R;<Z~Lu:xaRc!jtglTJ<;6?oUL=091DLzoz1]' );
define( 'NONCE_SALT',       'GMZE!v$j.vE[4}Z9xa~rnA*gz;*#3zou*>VeBvH5 y.EB?z_)fj+/^plX1{Ey3^l' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
