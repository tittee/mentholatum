<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mentholatum');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '112233');

/** MySQL hostname */
define('DB_HOST', 'localhost');
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fx$GZS.rg;>;{U?=x@d<RIw+:9Lh0rRB}tT}%I&FNV1SFSX0XFL2IcfufA:u4;g6');
define('SECURE_AUTH_KEY',  ')||2-XZQ2swvbB|a2eB7-vXK6$V-%*(T26>pY5_|RI~}wcM%jqzCgD-FUdhaUb.$');
define('LOGGED_IN_KEY',    '.|~,L3o-flsPo-^_B)|-OU>^j02H$lxX._|,!F)>Lb5f3m,)s(-:B||$g-[?Jy<]');
define('NONCE_KEY',        '1Gp;G1$fS4(:_`Fn8rv2$B|iwv@7u:pI`V5k@)]B,8a@G j8k3Tr(N.TH(/GwZ.j');
define('AUTH_SALT',        '5he}KAbryqG{8:Gq:5}PK9~2H;Est; I$8a5:`~VPhi~vlJj-VY}[sOJ}]{-*)6q');
define('SECURE_AUTH_SALT', '?Cb$SMIxcZ!tE&vb5%9Z+`dUzE^se<H%X`,i{02xb0cr|?(v2QU}^;dd=z!sRGk-');
define('LOGGED_IN_SALT',   '*l0.epD$bOHa2qHz|#5_ v@Z{v[@R}|_F|#e<)4jHb>W%)p-JrJvISRb{jW?zc#h');
define('NONCE_SALT',       '$QK>W:j5>V74H|!o!S}1+M[Q-=ue<-rciH-Q%Fsd}BX:>vJnYI=zFK.;ZWm|*3r$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zf_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
