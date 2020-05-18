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
<ul class="list-unstyled">
<?php
$level = 2;
foreach($list as $line){
	if ($line['level'] > $level){
		$level = $line['level'];
		echo "<ul>";	
	} elseif ($line['level'] < $level){
		$level = $line['level'];
		echo "</ul>";	
	}
	if ($line['type'] == 'url'){
	?> 
	<li>
		<?php echo $line['name'];?>
	</li>
	<?php 
	} else {
	?>
	<li>
		<a class='lnk_normal' href='<?php echo $line['path'];?>'>
			<?php echo $line['name'];?>
		</a>
	</li>
<?php
	}
} 		
?>
</ul>


