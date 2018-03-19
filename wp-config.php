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
define('DB_NAME', 'gloriya');

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
define('AUTH_KEY',         'H^jYI$^,+C7nG%j10/&?E:i_kDC*?S;? !X71>;ZAftyxaB/GCq=!GqVu?xDJRdi');
define('SECURE_AUTH_KEY',  '6yjQ*]`>w>It-aVC8>Nk4HE=o{ar[.2I9dPW7zAm{6/q@Rn6^oQnD{X3@ZI~NSs&');
define('LOGGED_IN_KEY',    'R~^=iMO)S.P un}$. ]a%V`V^h>GNlmbjdBg^ YkPS9kuwj:~JArr<~7[>pMGbmN');
define('NONCE_KEY',        '=e!0JjO%lXquo9<RP^$3X3?!7_.1^Hh&&IJ ?K5Y3=J^AO0*f;.l0%5P+bj-+r/=');
define('AUTH_SALT',        'JWV5./+[(gP 0*M5CtGp(W_vWwI)${*>[)^{JX Z.hRA>g}FFTY$6D(3?F3 f~kX');
define('SECURE_AUTH_SALT', 'W1RM@g_g+~rt>_pSK{MLfa#xIC*}H{k# |^m::xD2#7/l0rv(7N; XfcH1$UDP+D');
define('LOGGED_IN_SALT',   'es_;kq?#u8t1Z|@KRfl.vO6zYMqiS&J*#tjZHJ}>{TA|1$JTneU>Zc4(mJPWC=ug');
define('NONCE_SALT',       'CtXPiHL*cT=NK~sBr2+]y2cxOZY2iF#@[2%itcoi|IY5@}u2a=.;Z_h8]Q`-VY70');

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
