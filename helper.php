<?php
/**
* @package Author
* @author Joseph P. Gibson
* @website joesboat.org
* @email joe@joesboat.org
* @copyright Copyright (C) 2015 Joseph P. Gibson. All rights reserved.
* @license GNU General Public License version 2 or later; see LICENSE.txt
**/

// no direct access
defined('_JEXEC') or die('Restricted access');

class modmbronlyHelper
{
static function getMenuList($alias, $obj ,$access){
	// $base will contain a string of a menu item alias
	// Search the menu table to find the base 
	$base = $obj->get_record('alias',$alias);
	// Using base data, obtain all menus at the next level 
	$list = modmbronlyHelper::getMenusInLevel($base['id'],$base['level']+1,$obj,$access);
	return $list;
}
//*********************************************************
static function getMenusInLevel($id,$level,$obj,$access){
	// Using base data, obtain all menus at the next level 
	$menus = $obj->get_records_in_order('parent_id',$id,'lft');
	// Step through each menu item, 
	foreach($menus as $mn){
		if ($mn['published'] == 0) continue;
		if ($mn['published'] == -2) continue;
		if (! in_array($mn['access'],$access)) continue;
		// 	If functional put data in return list 
		if ($mn['type'] == 'url'){
			// It's a group with lower level menus
			$list[] = modmbronlyHelper::getMenuData($mn,$level);
			$subList = modmbronlyHelper::getMenusInLevel($mn['id'],$level+1,$obj,$access);
			foreach($subList as $lst){
				$list[] = $lst;
			}
		} else 
			$list[] = modmbronlyHelper::getMenuData($mn,$level);
	}
	return $list;
}
//*********************************************************
static function getMenuData($menu,$level){
	//	Package data from $menu record into  format for display 
	$site_url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['CONTEXT_PREFIX']."/";
	$rec = array();	
	$rec['level'] = $level;
	$rec['type'] = $menu['type'];
	$rec['name'] = $menu['title'];
	$rec['path'] = $site_url."index.php/".$menu['path'];
	$rec['param_url'] = modmbronlyHelper::extractLinkFromWrapperOptions($menu['params']);
	return $rec;
}
//*********************************************************
static function extractLinkFromWrapperOptions($text){
//	$text1 = substr($text,1,strlen($text)-2);
	$text1 = trim($text,"{}");
	$a_text = explode(',',$text1);
	foreach ($a_text as $elm){
		$elm = str_replace('"','',$elm);
		$a_elm = explode(':',$elm);
		if ($a_elm[0] == 'url' ){
			$ret = str_replace('\\','',$a_elm[1]);
			return $ret;
		}
	}
	return "";
}
//*********************************************************
}

?>