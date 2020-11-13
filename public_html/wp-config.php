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
define( 'DB_NAME', 'dbkge3c9xc4q4h' );

/** MySQL database username */
define( 'DB_USER', 'uzezcmm5ebapr' );

/** MySQL database password */
define( 'DB_PASSWORD', '6w563uwgvmtx' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'SQxdR;.8e`P:cC*a1wl~axY}]2MX,W5E8x:`^`sQr([vACDdq)*<QoolP$@y ub-' );
define( 'SECURE_AUTH_KEY',   '8&Z <[A]3A+H,K7e7Ip|53?UmC[C({~/)!g6%RoKScVVu[EHnAZ==B46(/GDVL,e' );
define( 'LOGGED_IN_KEY',     ']PC}-U-b(*7/YtFoo(i^rE.A*C?m/g&A%#Y*RKOU,yde46+F(8~2$~2ww/R )j.K' );
define( 'NONCE_KEY',         'RCP5bAM)T2Glp Vd$+VzskQRRT_I>2^t[pOb:y;PAAB.Xb<-(B.ccNn29zwO<ZcK' );
define( 'AUTH_SALT',         'OI *bL?7q_4u9gwvtFLMj&lUe[FL6K&30QPT] 1dECn4Jj:M]@Q[83sNV%iC0mtb' );
define( 'SECURE_AUTH_SALT',  '3LDx:(E[FwZ<7fxKQIk^J{gc?;6by:V6:m=H>ae_WB&O2M/9MR[XyK1dT+&o{An!' );
define( 'LOGGED_IN_SALT',    '@zRa6J&X,%^U}Q=o<N<.;cp~Rhh>}4]`dr!{2h}$/84!^0c~2.jQV*+w`Molzlyt' );
define( 'NONCE_SALT',        '+1|ALB;W^lh^B~o|=fk[w$}hQ2=-dwDX!ft!mu:ryGKz1b.*Zw,`kcp%[gA^fzjD' );
define( 'WP_CACHE_KEY_SALT', '~+&EzOBHzL9L!E$7n*&cA-dCGg1[cR{CXyEz(HhrO14Ftnnz l._/[D_A#iLerbs' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'enq_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
