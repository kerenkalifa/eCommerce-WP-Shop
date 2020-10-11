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
define( 'DB_NAME', 'ecommerce_wp_shop_db' );

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
define( 'AUTH_KEY',         'xMJ*ag.R6{2Vj@HGHFkrg`EyGNy?p%IBh,7OZRpV9@GY+jh#w4xxZUk1+EUo_I8[' );
define( 'SECURE_AUTH_KEY',  '(}aR%H<UvRt;M3_a6MCRB<Xn_>}^2D!+@eCHXR?h`&y^,}?K9azvd{{7$<U`<!uq' );
define( 'LOGGED_IN_KEY',    'UwV5_N9|kUs1oTr;gG[Ryj^M=I$+zg`e[d @_IQbRnL.wHMY?d*Qna&k8YFYeY_-' );
define( 'NONCE_KEY',        '&m `ydqHc7<:.uf@*kkC +dh1k-MB/y;;}PUbd3aI`?Fjo(kHoAoy?P).Y~C^C1M' );
define( 'AUTH_SALT',        'RdUU`b/WB`A?3aZKXR`cxt5IAGa?8n2wl$)K#&W6cZ<r,Lmota@%tDGad|.}.@YK' );
define( 'SECURE_AUTH_SALT', 'P6qi[m48t2(@p_u*E-y|7(LT#h&Fkusk{/kZi5H9qdLO; DPO~KR])I#[>463FF(' );
define( 'LOGGED_IN_SALT',   'J*BG$>^`KbnGC9,~}_eYu&o1<mw:1jHvX~U@kodw8 qIY@D~Q.| aHYQe}O-;@x4' );
define( 'NONCE_SALT',       'B| 9{@C9%C%p~|EB-r@f#p0[.ciz_c7Hl7(jfaLB7?n=.]F|VZAi4/0HWZ!8{zz;' );

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
