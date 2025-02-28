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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'sbartoul' );

/** Database password */
define( 'DB_PASSWORD', 'abc123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define('AUTH_KEY',         'J>F$hx]BZq.IYU1(QU?urh*$+0]AOA%Jp2`Wk-offc:u7/O-38%FRd{-;7&&Zb*;');
define('SECURE_AUTH_KEY',  '</6:1`S4|J%Wh:(:27{4$d),)>p,B3Dre%}tjZhGQ^COOa:Mwq@Si( jog[|bAA&');
define('LOGGED_IN_KEY',    '1LPyNgv/b/T:>&U*x{(ydeXT[/5&Ab%-FHp7u6<g.y6R~UI-i0RUy|8|G#xqZbXj');
define('NONCE_KEY',        '<50~df5O1vGIgu<p.?YC,a<u]QXI$|foT3fP<Qq^<jDo9LG}jD}u8O*%]HIT0?%a');
define('AUTH_SALT',        'T$XpG58WA+AV/5$etMSY@*Y+B(S~Jz^.YB-e03+gt|Sm^jeKn^/gjO->03SQOzqv');
define('SECURE_AUTH_SALT', '$DSe)@bQ[CtjNWj%}<!??fG,ME ^KOq8D /zAfu,4zg/B`$t5QNb/Rc)GP9m~ ?n');
define('LOGGED_IN_SALT',   'P`<@287736t?9)oO n2r2uXQly4N2gm@X$W0TcK6>]hR?M184yEBNgI)6tX0EXaX');
define('NONCE_SALT',       '!i7H4?n$(BxPdebb;qj[g6`h-eVo/?OhtP-9%XjnW*LCXAxaWZ[LG@g#A+2{?qk|');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
