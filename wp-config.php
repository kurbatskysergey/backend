<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'backend');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pkm4qR7V~-W:/bv&6%2t =!<DV1-?N{[7;liRV[T3f+&}]<]/7cgOfA=b(d;d+Ek');
define('SECURE_AUTH_KEY',  'bsDc~ov)y#{cU*L[:/-AkD+08K|m!yuKNaA/$j(bY,mQ]cz@UUI~]*<@ab]q[dt%');
define('LOGGED_IN_KEY',    'ich{{q~zb{Hp#V{n#e[oooYd.v<_SEGu%y^smXG:2xPY_Tk_!|/gM~{j!$H}^N^7');
define('NONCE_KEY',        '3r(Xn?,37*bKS*]=oN~/Y<G}Li&B,|1HkBbEJT)%onn#UZ,V`_+X.S$0v&R)`d^0');
define('AUTH_SALT',        '_/l4rtr1*l>rL1HfbXb!3CdJ([ d.N6`=B4 e:`-Mb9chuS>TtM]<$0G?KPKJ-Xb');
define('SECURE_AUTH_SALT', '>}LvC[/e3sy6xNfJ;VFn8SvYfJs%1T6S2HDO&<RB1M1o!KxrV:%Y.rZ</bimrSD+');
define('LOGGED_IN_SALT',   'N79x}q!j:Xs7 V4{yNkw{]q6=%U%<oMooKw:/vi;4:`+dNe+K)o)R8L,+u^gwO~]');
define('NONCE_SALT',       'y;k:Zma36}q<xAIu&r/w;8$hp5f:!0<xn-z/vpk|Y=XQF ?i,<<z%pm>)X9Pg]:+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
