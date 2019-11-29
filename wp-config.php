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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwertyuiop' );

/** MySQL hostname */
define( 'DB_HOST', 'db-malyono-131019.cf4kbdfuw9lt.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '3Mr[~!|t=bnYBbwacQgt{#,k-LqDOyE&kC5=rh-wjsVvE;maEkV_eV-jGJJ>[o%j' );
define( 'SECURE_AUTH_KEY',  '(bdHw0wZr:uvTlk*..O{]53P@Q|g0)I_^GQrpvLjB<SNKa`RPvtn_;*&o>g$,C%O' );
define( 'LOGGED_IN_KEY',    'WBasv4(U[PzL>Q8<KP@z$j3SC,!qtxDP/4?FybQ;T.Uju%xTEX^>+M,O#vYU 4;_' );
define( 'NONCE_KEY',        'ik IOBx)S>,])]B]29U6SV/y $bWqtEhubI ((t3 Vco0zyTo&F2.u]kL)at6h%?' );
define( 'AUTH_SALT',        'ZjhV;h;ibzd:x!/f([7V.-a;6udr^SS0LY&N2]v@B`5!+CIA[y,<XeF5/sK_cnrm' );
define( 'SECURE_AUTH_SALT', 'G^U>-AwtaqhY6gJ;7u-p>PQc90<9Za+9{Wj+b0dM,Lt5[1-f.ili:oBfQT^Tm; r' );
define( 'LOGGED_IN_SALT',   'Ih:y>9}+V<T@/6FU}q5%Ua^=`cH`-=SlDSQLht<FTo;y4@<ZN)0gk2(V-0^ `A1 ' );
define( 'NONCE_SALT',       'Ee)=gGuc?)+,zVoj$klzAD#^+;XeZ@,L03-+bA qc8*XXHa2%cTbf_``f]X&kC_{' );

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
