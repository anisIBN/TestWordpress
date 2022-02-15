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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S3lLuBL+cTT0yLu1n17itf+tgT9OmOBl+I6uXtuARiZ09avpYLFFY5Sv/zwy5MLu9yHfdwv7tg9wPcQlr+w/PA==');
define('SECURE_AUTH_KEY',  'llUTRtlIgDk1rH9YXtrDZpI1K83hnoejToYWIwYekOjZ8u3/QBFbed/bkjcVLMKYD+Z3q7j598HWrUQL4Ngh0g==');
define('LOGGED_IN_KEY',    'J2+FWa0L2FgizUwnwnZiG/OGmWLP9cSHlyyRfPHLgFTpnuTpayOEwLXMD0thOO335QdAPcOFc6tg/FLaN7NTjw==');
define('NONCE_KEY',        'CSEEg4qFqpnVvM1B4ZNceVZ97NPaC3dZifOUmImXbi2d607BUjRXkAftmkJV8/FPytGvyonvoWwpJAc2tZGQGQ==');
define('AUTH_SALT',        'LPFhFafwzdjYLY9Q1nWMhKKnz3/fhIPaujyIpN371w7v6wWRWM1DcvNIpCVU/6PErTKjR/1MlpSLpFm0/D2zjw==');
define('SECURE_AUTH_SALT', '5nZQtlG4oOhmwMeRxsCiHL0tcDz5LvbzlAE+1rwPe+RIWq7V2SqMUSev1HyeA9d+hOhBkuX87PIPoAoVSwQAww==');
define('LOGGED_IN_SALT',   'VgR9Zhsn8ho6TgI5Q0MgjIJoXd4NFlcfBA5mhY6qC+h2pnof2ojNPbCgCL/z4sjq9hSgvQlN08o9IE7jxRR3TA==');
define('NONCE_SALT',       'iWU0ZTjQCXgUPsyMxzt/HS1tUljQ8ocU8kH7oSgE8ClBCcq9HQgsJmP1BcYtwupBS7rRValnPjx22uHCoCpNKA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
