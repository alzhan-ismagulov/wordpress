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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '[?ngr1|,41G@[PqD{N~,v:d|rIv~,~CT~KnZ3uaZokYl^$8m?Ms<H)eF:^My2-{=');
define('SECURE_AUTH_KEY',  'q#B0>H>f7>`xU#>2k=3u]R3ygG~d[*c-hJ@h @(|!bPs4Sn!-X6DfV;DtJSA[hM*');
define('LOGGED_IN_KEY',    '3Fc<*Tktxkh,uYr<|R<EWQd~Hy/rD[dtA@QF5A)j<wTEva07_wDTq8P+1TTEG:gI');
define('NONCE_KEY',        '8j9CSclS[+X@}X7m*+{[Z9pQ&|oo=O*5*FpO,u~P7@59@}ILX/t`~7m+u{;eq0.b');
define('AUTH_SALT',        '*1XPsdxq!^ex)S|}@=FojCaT%6hp{2dAqLPQCV[>-EU?+dcyzJQ#c,*rqXmB&*^9');
define('SECURE_AUTH_SALT', 'Df;%d2`ch|H|RqtS2^yLN/Q Bz*9Niy;Q#.Ayr[8GZ!2gx]UfP I)`KZ?6m`i&)=');
define('LOGGED_IN_SALT',   '$eP(#s?u#0tYxo!q%S5~i2d6FImcVq`kwFe7LJy7t5&OF`-!A96>$C)naHs2FIN?');
define('NONCE_SALT',       '?:[q-./=hNzJK/O=KT4.vGglPcJA!*J]J`/|-?@nF ~|m)q`M{p@O40!eVBE+>v6');

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
