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
define( 'DB_NAME', 'shopthoitrang' );

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
define( 'AUTH_KEY',         'b&N$^RagO_<Y4nRfHx!Fs7ogcE<k,>+q/|`+E}/LIfbP}=YyQ0u5*)#LjQ1]NL%i' );
define( 'SECURE_AUTH_KEY',  'P} `l1tP2~}&~^HQae)[& LC~$D5HrWh/3zB*;?)AHO[ahBi|~w o8CZnB:U*W]Z' );
define( 'LOGGED_IN_KEY',    '.&)<~00a]FxPCwkWXtmti}Y)Spl2Tgv#9dH?fqh0dm]h7[@iK@)OAZo{]UN/L96F' );
define( 'NONCE_KEY',        'nuv[rRS~4qYz{Qh4Tmdxc~-V%f>AKi(e+GFKW2:zf4-dkBw,KUBXC)i7MwbVw9 p' );
define( 'AUTH_SALT',        'q&BHL?i`u<KZ??V^0H~Mi<yo+c#hC!%-BVT:$<w`11f_1sp9LC(#m]h,<;gIw6e0' );
define( 'SECURE_AUTH_SALT', '4Z1>/G^(8ps@ra-|W>|c5II!M0R]r67?ou>T@bzcFbi!)=hEcFA6X_|7VKP.zaXh' );
define( 'LOGGED_IN_SALT',   '[G?5[wQFU`L45r}1HY8:?M.k$kgo_vP5>*4=hZDF9VjW@~I,>qSx>g}E,/4E_>p_' );
define( 'NONCE_SALT',       'dI#|s2>Mr{fsvkJd_H]IuRdu3Xw]A2XKlP7lrsW_aA//4BOR`=Vi~XV=0(O:Nn4d' );

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
