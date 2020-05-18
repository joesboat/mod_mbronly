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
jimport('usps.dbUSPSSquadrons');
jimport('usps.tableD5VHQAB');
//jimport('usps.dbUSPSWebSites');
jimport('usps.includes.routines');
jimport('usps.dbUSPSjoomla');
include (JPATH_LIBRARIES.'/USPSaccess/dbUSPS.php');
require_once dirname(__FILE__).'/helper.php';
$session = JFactory::getSession();
$user = JFactory::getUser();
//$sqds = new  tableSquadrons($db_d5,'');
//$vhqab = JoeFactory::getLibrary("USPSd5tableVHQAB");
//$joom = new USPSdbJoomla();
$joom = JoeFactory::getTable('USPSdbJoomla',"");
	// $websites = new USPSdbWebSites();
$year = date("Y");
//$username = $user->username; 
//$squad_no = $session->get('squad_no');
//if (! $squad_no){
//	$squad_no = $vhqab->getSquadNumber($username);
//	$squad_name = $sqds->getSquadronName($squad_no);
//}
$access = JAccess::getAuthorisedViewLevels($user->id);
$menu = $joom->getMenuObject();
$list = modmbronlyHelper::getMenuList("d5-members-only", $menu, $access);
$id = getGroupId('USPS Member');
$groups = $user->groups ;
if (! in_array($id,$groups)){
		exit;
}
//$mbr = new table_members('d5_members',$db_d5, $me);
//$jobs = new table_jobs($db_d5,$me);
//$blob = new table_blobs($db_d5,$me);
//$year = $blob->get_display_year();
//$exc = new table_excom($db_d5, $me);

	//$baseurl = 'https://www.uspsd5.org/private/';
	$baseurl = "";
//	$row = $vhqab->getD5Member($username);

require(JModuleHelper::getLayoutPath('mod_mbronly'));
$joom->close();
?>
