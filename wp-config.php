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
define( 'DB_NAME', 'sannatour_2' );

/** MySQL database username */
define( 'DB_USER', 'sannatour' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sannatour' );

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
define( 'AUTH_KEY',         '&jO3mjSm~w!)Fq51L}Y!J:zsR>YA~bXR}iQw>++]rD~(EF{ ej{=&m&k26N8V.jU' );
define( 'SECURE_AUTH_KEY',  'C-L?J*DH.J1%pJg`2E8=|.ZTlN/R[%NY7_4=j()}2JddR-d2aoGleb79LM{p8m4{' );
define( 'LOGGED_IN_KEY',    ';{!==xhxX]g)r3I:y=Rbe%`5-X(@ACPO]*ks!;D}+6FGdH2`Mnvhu6kvN<v/o?g.' );
define( 'NONCE_KEY',        'AWMf0q(Bwuk3TJSN@$l@/j~Zbt^?:-l@xCUQD$Hb7x%>{Ab7>`UQ.&Q5<!=7/Go`' );
define( 'AUTH_SALT',        'S(,&l$3auPXp.`Y&AZYnx0:@tq?+[ rDDp>*lPQhrhLEF$ 9,C[p]UDXe{66X9Pu' );
define( 'SECURE_AUTH_SALT', 'JzCiq>J5YkT9an.[6;cFP[j_Uo;&+@s;a<EORh@1%(T<k_jR&Kfj&*WZ2 5y7]_n' );
define( 'LOGGED_IN_SALT',   'f<{!RSV0A=mijr4jtqck$SUzZfg<t^x?GG)h2Bc;J|?2/OaHKldvJo>8>^+zjzcs' );
define( 'NONCE_SALT',       'Tu0GdYvBYG!wmZu~(/:,v%e:ByVIIg:3$RdJ d0Is[rM~jlJg}V,sSL7nyO)V9%D' );

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
