<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'abdullah' );

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
define( 'AUTH_KEY',         '/9h00AR_5.Llz .T$Es3GHe{YfY;gUMpc`dMu+V?C)6(!3`v9*c4z(gZB#Y/QqP?' );
define( 'SECURE_AUTH_KEY',  '16QriadE{w4;5&66n(-Uo!l#@|4@G.kC6uB)hp7SqTBco 52}YCTRC-Ls,Q$zP%*' );
define( 'LOGGED_IN_KEY',    ' h/`E!O`Lu0sH/9ZbpHOn@jR2ynPE4gm&JT9^A=ZrDC*$_B=@c*vSFv!AW-Q)%P*' );
define( 'NONCE_KEY',        'H!j b / ^jOY~1h[e_tBX}r/;ASB&6{J6-h+&KMmIZ0N4o` JA~qc-Kja|7X=zH)' );
define( 'AUTH_SALT',        'Od|wz,Z;*6%vvxRX#5)AQzf,@TRtO0o;-KS.hrqSXuTuOiyv{NKVZOvNc<s&QO6W' );
define( 'SECURE_AUTH_SALT', '*/-~B?UwlkqxOB.-TU$}tlLBKSP*&O]`L(xYqA6au#%x-z9gR#_pA0@Lwk2xCsec' );
define( 'LOGGED_IN_SALT',   '.EY%JS^QQXOPB19#xfAt4*J^fzRcAD/o5kd)_]QOumGA}!{92Z6*&zKZL,jz#tLg' );
define( 'NONCE_SALT',       ')~ 9{w7<&xAAV_V;H#9>*tA8%DnwkwZLOt]$}J6RWe[`-Mvo3J.GV1 f 7!%7@eo' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
