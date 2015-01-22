<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'bdk');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '&clD?8:5>x#|ry*2bc;v>l?Vd~{P+zOn*HB6_pj>G7@n+cANrQr-`Y$Tq+P%Iow+');
define('SECURE_AUTH_KEY',  '!U:sB #SfX*~j_[rfly`~|1b=bcPz-wbv@X;5 9jw] /,nslJuxlV~>aQ:[>n_%%');
define('LOGGED_IN_KEY',    'wr*B(}zq(Z.-w%}uL6vp!R;G2ii%8T)IKN8}e?sxwLHxUh9g5tjs!cSiy2V.|/vX');
define('NONCE_KEY',        'D,}ziZ.Y]s|k*It;N(E1_ ]#E0Luc;>:Y-T W2khQM/Ev.Ad>gas9/aJS*TTjV#K');
define('AUTH_SALT',        '=hTJz]>l)%+2m#iw=V;es`:+p3*)JAq?GOxcoco:uZ&NM8<y;6lf18C7;HYE`!+o');
define('SECURE_AUTH_SALT', 'r#Ej?aR|UZP-FI&Y^S6LN!95/lB/ou7cZMJV,S}PLEWK!cVUOQkB2UvRqy(+xogD');
define('LOGGED_IN_SALT',   ')X*Q-Iiz~m8y~epEVwiOj5}0la]-%!mqN$<o(L6)*q@i1,vn6)~f18yTov>Z-h0%');
define('NONCE_SALT',       'zsG#Qj|ju)BGNM)cTs#~U6E%Rm&LXwZ-k0bZGqVtL(&!U&xdHD<LX#_#MBsU--[-');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

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
