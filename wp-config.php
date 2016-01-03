<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'moviemegane_blog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'makoto');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'akasan123');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FXS![>wsl-WtEFx,)!J~Xb4BiV1gZ Rm$amU#60BYWM%Pcbggg$+-Y yb:h((Bml');
define('SECURE_AUTH_KEY',  '#j|u~+7G<(+Tm@Y;~RkMD[aN~r3z*?g}k+(e2pA@;` ,+g}iUq%hyTSTbpLbmrK8');
define('LOGGED_IN_KEY',    ' (5kV,<9JzmtA_{OaL}{Xc1w~+XWx+p5L-rVg f3,!6yL`2bp)$|f6n3qeJ-Z2 M');
define('NONCE_KEY',        '<}Y)4jY`%>o>Is%ETVR~&-<V$2VFGs:_oi,Pn=@Zq-1m3iA*^5Lr87X|_KEMU+}N');
define('AUTH_SALT',        '!Lw,/QuU1&[dtl./LyIh|tK[xL-:~6++x<IQo`oBZ{s=c_h%Er1/h^.CI[+6TSxy');
define('SECURE_AUTH_SALT', 'Qo{wy]};!S,RZ|K=5/V-@M-d8yBG}/Pt6|M++j&#2RD!M:,QV4|#C-k{@([sLW<j');
define('LOGGED_IN_SALT',   '9}tc/`3P+&oq=R22/8~--3<b{Sh,SLiw{N<h+IlTG*NKi;b]*+GLRp/arAK+d|8+');
define('NONCE_SALT',       'BOpb0wi1^_e(AsNft~~-/Z|*K{`U4ikhM4[LFH#iM1|xNw1n$|-[3JkVmII$F5j%');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/*プラグインダッシュボードからダウンロード*/
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
