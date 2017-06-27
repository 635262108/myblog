<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'blog');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P~a@[xs&Qd@am}?d0JE<%Y6H9XVX /Es:z*BUInOhx>xrZ=-GzVN%EnBNsRQY(2W');
define('SECURE_AUTH_KEY',  'CFBxbU!+gL$3Q JG]xz|7{K_-p6LwwCCvfXj-|gG=qxq`w>>1,Q8|32hlp64L4yH');
define('LOGGED_IN_KEY',    'iN6u5LeXNh>.$V-2.bmbd;P#vq>7X~8V#XIb+(nA-p(rXa@j0=GDa;k-;|*9qk $');
define('NONCE_KEY',        ':%&B2*v +oK`0u^h!9Z,b0.Q[WvBE~Lj7ruHj![gp7PtExPue0sgeH!6TPT8YNF]');
define('AUTH_SALT',        'Rw$P/9|0oa!WJPh:e@Hpb0yE%GB=k?|I ^2.0dY`}2_Cx/0d4k%/G-DcTOEaK]bp');
define('SECURE_AUTH_SALT', '/ER9<[J*H]:Z6,OH*?_[S&__{Mo/L@dAfZ3Dcqm]J3l~(>D3b~{n!*wZ%:3,gA q');
define('LOGGED_IN_SALT',   ' <rIBJgZxxDK(2NN)SgIf*b,.| NS%/oy*jQGH{A2|)F5SsAo6v3M gZ|=z8d!cv');
define('NONCE_SALT',       '(u5$7g9QO>R9O=z?/H;M7<JleV F*D=h[T3w8E,Bm:.:r%QY?;C]*bTZ$LtCg2N[');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'sqz_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
