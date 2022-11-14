<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'enviro2' );

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
define( 'AUTH_KEY',         'A6,QXKUn)]Q~ise`_Fw$+SAj%fn|@Acg2;c6Eh(ZxXH>sNeQRv/8K1||~C](/`._' );
define( 'SECURE_AUTH_KEY',  '!I8MVd[utLM/8G~YzoKt{^16K@#SFWNWR&~cUKv_ /FRf_knc]iN[8$ ]<,/`E}]' );
define( 'LOGGED_IN_KEY',    'K<D$2R(*{mt1c`$L;M[jCqPL+&_cP(,n+~~K+NFQ)p*y:nG;n7ia~^ty v@J|6<a' );
define( 'NONCE_KEY',        'Nsc^U4~p157)`dqbP1%4uE*5-<g+8R.,}A(ywED*URk@SR-3%X-K6%%ZMUN[e_r0' );
define( 'AUTH_SALT',        '|#79jX~G&S1-V`?k)laqQY;b(0RAXJK[viz)F03<y_$,/1XWT?gQXpc9Oz]Dj1g-' );
define( 'SECURE_AUTH_SALT', 'qnC.yH{tn1mZ~|4+%HADur%fW3JgAEd*Q6i`#+Sca_4G2LRL1is):xg_$[_Lg*Ay' );
define( 'LOGGED_IN_SALT',   'w/@#)w6#)1mnUeK2(5+~o}0s7,iiS7M>y9.uMzHbCz[6!-4,zD.tOYz.5z]1L&!Z' );
define( 'NONCE_SALT',       'VzRU6$V}mr.YEWtt7R<jj} )WpUg^~<n1GWtvtycm5VNR?zMc*os$E04V{|*i6h$' );

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
