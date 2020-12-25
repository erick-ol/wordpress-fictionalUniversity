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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
	define( 'DB_NAME', 'university' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'dbo3929skjlmac' );
	define( 'DB_USER', 'ug1yrxn6kdtp6' );
	define( 'DB_PASSWORD', '1c#7_[@#A1({' );
	define( 'DB_HOST', '127.0.0.1' );
}

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
define( 'AUTH_KEY',         'a,Y0cR|}t:Av6~@Ey6[U*8hqso~)J!NM_L{a/LpnCcF3RT<:~BQ7$@AbbP{[8?p|' );
define( 'SECURE_AUTH_KEY',  'j;1`RSQhn8dyp1Mu@96/e:&e.+D90yiI!Q(=OL+ _RxgMk|S o2SJWf{dX*s]:![' );
define( 'LOGGED_IN_KEY',    '%3`w/+oodsU7pyqmnGl4{cj=}:0SLw/q)-[F2vVn cb1A@{=wd=p(#P$C(0r.lKV' );
define( 'NONCE_KEY',        'KB>/:[h1C5hRg]U]Nkfx4g>`;Gx hf>%SY pfV%F[2WDA6<UtLb:S#HZz=}FC-+3' );
define( 'AUTH_SALT',        '`~_:}y>MVigzGh{7O3I]ryDz5PfrMKd+B|5&:NC7X`X1{]`Gt`]%_O* Y-KCYpfZ' );
define( 'SECURE_AUTH_SALT', 'd%7[:3bRwjfCKv<WiiFSf)y[I}|S1-hrf>>r_# W|Rj%=HaN-oa)o6]$jfud9-zd' );
define( 'LOGGED_IN_SALT',   'CZAQlQ6/ QiuvXYd@%r}ObWs@t0@bvuGpT9l<)s ZVHA!pW|:>.*2LP-WkSDBR`G' );
define( 'NONCE_SALT',       'c}@0ANutv2dA+p`-]xjNWhPLZ(2%ct<32I554ygdHm^<G{s~ueS6RZ4l[uE~?o1U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fu_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
