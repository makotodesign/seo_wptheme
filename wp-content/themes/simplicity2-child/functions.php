<?php //子テーマ用関数

//親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//親テーマのstyle.cssを呼び出す
// function child_theme_enqueue_styles() {
//   //親テーマのスタイル
//   wp_enqueue_style( 'simplicity-style', get_template_directory_uri() . '/style.css' );
//   //子テーマのstyle.css
//   wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css', array('simplicity-style', 'simplicity-style-inline') );
//   //子テーマのresponsive.css
//   if ( is_responsive_enable() ) {
//     //完全レスポンシブ表示用のスタイル
//     wp_enqueue_style( 'child-responsive-mode-style',  get_stylesheet_directory_uri() . '/responsive.css', array('responsive-mode-style') );
//   }
//   //子テーマのmobile.css
//   if ( is_mobile() && !is_responsive_enable() ) {
//     wp_enqueue_style( 'child-mobile-style',  get_stylesheet_directory_uri() . '/mobile.css', array('mobile-style') );
//   }
// }
//add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下にSimplicity子テーマ用の関数を書く
