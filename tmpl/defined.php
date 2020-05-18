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
?>
<h4>"D5 Members Only Tools"</h4>
<br/>
<!--************************* Roster Tools  *************************-->		
<ul>
	<li>Roster Functions:
		<ul>
<!--		<li><a class='lnk_normal' 
				href='index.php/mbrData.php' />
			Update Your Roster Data</a>
		</li>
-->		
		<li><a class='lnk_normal' href='index.php/d5-members-only/roster'>
				Full D5 Roster
			</a>
		</li>
<!--		<li>
			<a class='lnk_normal' href='$url booklet.php' />
				Download
			</a> 
			Current Roster Booklet - (Response will be slow.  Expect ~ 1 minute.
		</li>
-->		
		<li>
			<a class='lnk_normal' href='index.php/d5-members-only/roster-2'>
				Your Squadron Roster
			</a>
		</li>
<!--	<li>
			<a class='lnk_normal' href='$baseurl.SQ_Booklet.php' />
				Download
			</a> 
			Your Squadron Roster Roster Booklet - (Response will be slow.  Expect ~ 1 minute.
		</li>
-->		
		</ul></li>
<?php		
/*
//************************  Event Management  *****************************
		echo "<li>Event Management (Conference, Meeting and Class Schedules):<ul>";
		$url = $baseurl.'ext_events_maint.php';
		echo "<li><a class='link_normal' href='$url".
								"?org=6243".
								"&user_id=".$_SESSION['user_id'].
								"&mode=event".
								"&action=add".
								"'>Add a D5 Event</a></li>";
		echo "<li><a class='link_normal' href='$url".
								"?org=6243".
								"&user_id=".$_SESSION['user_id'].
								"&mode=event".
								"&action=change".
								"'>Change a D5 Event</a></li>";
		echo "<li><a class='link_normal' href='$url".
								"?org=6243".
								"&user_id=".$_SESSION['user_id'].
								"&mode=location".
								"&action=change".
								"'>Update a D5 Event Location</a></li>";
		echo "<li><a class='link_normal' href='$url".
								"?org=$squad_no".
								"&user_id=".$_SESSION['user_id'].
								"&mode=event".
								"&action=add".
								"'>Add a Squadron Event</a></li>";
		echo "<li><a class='link_normal' href='$url".
								"?org=$squad_no".
								"&user_id=".$_SESSION['user_id'].
								"&mode=event".
								"&action=change".
								"'>Change a Squadron Event</a></li>";
		echo "<li><a class='link_normal' href='$url".
								"?org=$squad_no".
								"&user_id=".$_SESSION['user_id'].
								"&mode=location".
								"&action=change".
								"'>Update a Squadron Event Location</a></li>";
		echo "</ul></li>";
*/		
//************************* Education Department  *********************************
		//$url = $baseurl."import_classes_from_usps.php";
		//$url = "http://www.uspsd5.org/query_usps/get_courses.php";
?>
	<li>Education Department Tools: 
	<ul>
		<li><a class = 'link_normal' href='/query_usps/get_hq800_list.php'>
				Import USPS Class Schedules
			</a>
			(District Education Dept. Members Only.
		</li>
		<!--$url = $baseurl."setup_courses.php";-->
		<li>
			<a class='link_normal' href='/courses/setup_courses.php'>
				USPS Course Data.
			</a>
		</li>
	</ul>
	</li>
<?php
/*
//*************************  Ship Store Tools ***********************

		echo "<li>Ships Store Tools<ul>";	
		$url = $baseurl."setup_store_item.php";
		echo "<li><a href='$url?squad_no=6243'>Setup D5 Ship's Store Items</a></li>";			
		echo "<li><a href='$url?squad_no=$squad_no'>Setup Squadron Ship's Store Items</a></li>";	
		echo "<li><a href='$url?squad_no=9999'>Setup Uniform Exchange Item</a></li>";			
		echo "</ul></li>";
		
//***********************  Management Functions **********************
		echo "<li>Jobs Roster, Booklet and Newsletter Management:<ul>";
		//---------------------------------------------------------------------
		$url = $baseurl."specify_jobs.php?mode=d5&".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url'>Update District Job & Committee Assignments</a> - (Available to EXCOM members.)</li>";
		//---------------------------------------------------------------------
		$url = $baseurl."setup_booklet_pages.php?account=6243&function=options&".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url'>Upload District Roster Booklet Elements</a> - (Available to D5 Secretary Department Personnel)</li>";
		//---------------------------------------------------------------------
		$url = $baseurl."upload_newsletter.php?squad_no=6243&".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url' >Upload Mark 5 Newsletter</a> - (Available to D5 Newsletter Editor and D5 Officers)";	
		//---------------------------------------------------------------------
		$squad = $_SESSION['squad_no'];
		$url = $baseurl."specify_jobs.php?mode=$squad&".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url'>Update Squadron Job & Committee Assignments</a> - (Available to Squadron Commanders.)</li>";
		//---------------------------------------------------------------------
		$url .= "&function=options";
		echo "<li><a class='lnk_normal' href='$url'>Setup Squadron Roster Booklet Pages</a> - (Available to your squadron officers)</li>";
		//---------------------------------------------------------------------
		$url = $baseurl."upload_newsletter.php?squad_no=$squad_no&".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url' >Upload Squadron Newsletter</a> - (Available to Officers and Newsletter Editor.)";	
		//---------------------------------------------------------------------
		$url = $baseurl."import_roster.php?".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url' title='Updates the roster from a DB2000 report.  Adds any new member records.  Displays records where differences are found for observation and update decisions.'>Import DB2k Roster</a> ('D5 Roster Chairman Only')</li>";
		//---------------------------------------------------------------------
		$url = $baseurl."associates.php";
		echo "<li><a href='$url'>Manage Associate Members.</a> (Available to Squadron Commander or Treasure.)</li>";
		echo "</ul></li>";
//*****************************************************************************
		echo "<li>User Control:";
		echo "<ul>";
		$url = $baseurl."logout.php?".htmlspecialchars(SID);
		//echo "<li><a class='lnk_normal' href='$url'>Log-Out</a></li>";
		$url = $baseurl."pw_update.php?".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url' ";  // onclick='return popitup('$url')" ;
		echo '">Password Update</a></li>' ;
		if ($exc->excom_member($_SESSION['user_id'],"webmaster",$year) ||
			$exc->excom_member($_SESSION['user_id'],"site_maint",$year) 
			){
			$url = $baseurl."set_squadron.php";
			echo "<li><a class='lnk_normal' href='$url'>Switch to a Different Squadron</a></li>";
		}
		echo "</ul></li>";
//******************************************************************************
		echo "<li>Member Communications:";
		echo "<ul>";
		$url = $baseurl."get_mail_lists.php?".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url'>Create Mailing List</a> </li>";
		echo "<li><a class='link_normal' href='create_roster_address_csv_file.php?org=6243'>Create D5 Newsletter Mail List</a></li>";
		$org = $_SESSION['squad_no'];
		echo "<li><a class='link_normal' href='create_roster_address_csv_file.php?org=$org'>Create Squadron Newsletter Mail List</a></li>";
		if ($exc->is_commander()){
			echo "<li><a class='lnk_normal' href='$url&full_list'>All Member List</a></li>";
		}
		echo "</ul></li>";
///*****************************************************************************
		$url = $baseurl."site_maintenance.php?".htmlspecialchars(SID);
		echo "<li><a class='lnk_normal' href='$url'>Web Site Maintenance</a> (Webmaster Only):</li>
		*/
?>
	</ul>
<?php
