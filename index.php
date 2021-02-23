<?php 
require('UserInfo.php');
?>
{
    "ip" : <?= UserInfo::get_ip();?>, 
    "os" : <?= UserInfo::get_device();?> 
    "region" : "California", 
    "country" : "US", 
    "postal" : "94107", 
    "latitude" : 37.7697, 
    "longitude" : -122.3933,
    "timezone" : "America/Los_Angeles"
}
			 "ip": <?= UserInfo::get_ip();?></td>
			<td><?= UserInfo::get_device();?></td>
			<td><?= UserInfo::get_os();?></td>
			<td><?= UserInfo::get_browser();?></td>
	
