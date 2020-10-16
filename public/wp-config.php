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
/** The name of the database for WordPress */
define( 'DB_NAME', 'unessapp_db' );

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
define( 'AUTH_KEY',         'Y}dF}La$IaWWB$KZE&RL7CHjaOO+!%0e:+<S?jG,pIlP`UuD2:3}$m8@4,9@PsQ8' );
define( 'SECURE_AUTH_KEY',  'C{VDC>IHKyS<P.T|lwKLOh6K(6oj I^V?Ipc&#_w{&VbSJkS[}XDP]Uv/ A__k~k' );
define( 'LOGGED_IN_KEY',    'G6c9c$HxKiSI]l/;Yf;4T-QZ/knH:46hA$E&B&ha;&-9 lxACdy:;X*>YpPwU vl' );
define( 'NONCE_KEY',        'jr^%urJ!!rsu>bK/b/UX(Sos?Ev!^Y=bC_aWmVnxeAG|X3{K@B>w-]<6,Y_1?3?C' );
define( 'AUTH_SALT',        '->_(!a<My?P`L93Txex+&}y3vX,,c-Q{W()^^OhJGf4Kg84b]ExKjgd]u#dHldoG' );
define( 'SECURE_AUTH_SALT', 'Oy}oA]@8s~e_2@3`S:E>_VHs%Zr!nS.tM{eN~Pk9-nm4$Q(?XD<BNc_98?D{I2m}' );
define( 'LOGGED_IN_SALT',   'ElkEMSl)-~OEOgHr85QvTEq l:Ej.tLFbjH9WY~XCfADlT{}-kk0q6[`?B!zR},w' );
define( 'NONCE_SALT',       '?.okDi/qRt->m5R3(T~d9AY33`VLZj!;7R3)+S]z?MS~zVj3D{ZJd8Ie5Ynn(/M=' );

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
