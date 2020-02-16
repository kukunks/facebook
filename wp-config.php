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
define( 'DB_NAME', 'facebook' );

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
define( 'AUTH_KEY',         '?+XzfT3i.pv?F+XY26.J) ,}b$RsqWwlW[lBv`C]~>vk397M#]*`Deq^gVPcz vJ' );
define( 'SECURE_AUTH_KEY',  '[1+f#}m+?a6@ 0{R7E,{azF}@J$,!k%]8/sSSxU2{pO#4$_SayVyT)3FL-IS^>6V' );
define( 'LOGGED_IN_KEY',    'rLiS|7p/*A)4+*gH<W{NO3;LBf#y4.sb){+9q-X}`w4a8O4([ay]0k/aK(B!O+w|' );
define( 'NONCE_KEY',        '`~Fn4#gcULlLi/DrqC+bbG;ja55jp/-~vC^GwncM(pn4P_?NmQ?&kyAHFQ_gt]5`' );
define( 'AUTH_SALT',        'R_jH#;:Ypwb2K17lydyusUbY7PRXSvqS4rTl8i9}5Cet6LsJ*-sGT ZM|Y=qXQxL' );
define( 'SECURE_AUTH_SALT', '@=j-6OcP%|6L7,5IsJ$XipCsc)A#<gVrNFxsTR-9RChMd63|:`YL5XHtj?3ApKyV' );
define( 'LOGGED_IN_SALT',   'C^%s2.BT}w^H%sGZ{-xLnCN|2|%5Lyq@2<cX/E~O.zVhkYgGssLGuM7nyz;7jqQm' );
define( 'NONCE_SALT',       'ly*sq0$%q1HWysJQ#7WI;d~C%_A-IBr^|L/.18x+./%LOJK`_*4r$d#ni(kZjo(R' );

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
