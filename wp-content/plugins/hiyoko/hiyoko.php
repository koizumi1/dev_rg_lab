<?php
/*
Plugin Name: ひよこ
Description: フォームの作成
Author: koizumi
Version: 1.0.0
*/

add_filter('the_content', 'hiyoko');

function hiyoko($content){
  return str_replace('。','(^o^)',$content);
}
add_action('admin_menu','hiyoko_menu');

function hiyoko_menu(){
	add_menu_page('ひよこ','ひよこ','administrator','hiyoko','hiyoko');
}
