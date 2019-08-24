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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(C1McL^!^Q+R=g9(srsn.2tjcKt3}t_hG:l-EjT#7bS_h0|.cIRd+,YR%d(ojD!H' );
define( 'SECURE_AUTH_KEY',  '=<^dH+=L8EP3fBPcp}Uw*a`4bw@~8lqFeb<^: C@(-t :rX2W^o4@J9w^Z?XHAOT' );
define( 'LOGGED_IN_KEY',    'f%3RH=jDkm69L`XF8_qyt%>Vr)LWW[Zx(Qzd$^a/AM ,9J<SBj*JYDl-I>ALi-qq' );
define( 'NONCE_KEY',        '_J[F26t?bb&u@]n%X#w549n|.Mf@)+G!t[SmULcSuoGFh,#jNa]A}&=898$`A:_U' );
define( 'AUTH_SALT',        'V.tgvO%>e =6PLtaONJoqG;%m4|kd(tGd_4D5wE}3 Dl2=+nPi:(UoVB&3spqfC<' );
define( 'SECURE_AUTH_SALT', '8&jI]lNb(]29;naO|X|LBMa2$#Lna&U@MLs*%/$sNw=8DcYD;[%0pUn;)[:eY2aF' );
define( 'LOGGED_IN_SALT',   'Yg3$mOjd1|.}{;NB8N6HLz1rwemaQp`8 ({?-LF_XXu(i^_V 16q[ DP-;6L;TWY' );
define( 'NONCE_SALT',       'v%Toa,*YhGViHc`pBYb/4} 0|b&ZS}*b6[Z#MC0K^c74g`f4`j$!zh@1E0zKCQoH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
