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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/I!WIM;&rUd]fU%(<|wY0) Nl-6ab<rs/q:r:>M6#A`jzNWl%~oXX.ns$(Cr|0ZQ' );
define( 'SECURE_AUTH_KEY',  '-?||7[ZOTp*ij9e%-omBvz-Re_)J.J Vrxo3c9hNP7SIV7N;U$SD<=CrE-R/[sS3' );
define( 'LOGGED_IN_KEY',    'FAQaNg`c5=8atng%PEdFZUbxTMFv |FH0sU2us!t3$,X~6LJ}^6RSz/&gh|zW+hf' );
define( 'NONCE_KEY',        ')83wqR1U*0{0hW8]8pKH]<AZ]SE7zG}gCRes4XxJv`nTc<&71gw:O[VygQyu !`/' );
define( 'AUTH_SALT',        '%C>z`_8UKb:6r_kQ%O@S;fWb9l%y.I%b4DN:R1mhWWxpbRT(&bN7#IP1YR+4:~bo' );
define( 'SECURE_AUTH_SALT', 'j@pUN|/fK3-8^=C+nM]%+_CJ1Xnh7+gWF/Ly0sf&>=6QgD)mHD)L-I13twCcrSEr' );
define( 'LOGGED_IN_SALT',   't8y.d$n$AIG%Ri3aAx/;ifXVnLC2>VQu)ezK-=SS5IUz)jP|qp)W&FM:]L3(- V ' );
define( 'NONCE_SALT',       'UJTQPCdt*S9T2wr|rnW2owQ.Cd{of3+4f-gKFW^ox$B**NO@hv!(~&t9s+ {-JN~' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
