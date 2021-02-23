<?php 
require('UserInfo.php');
?>
{
    "ip" : "<?= UserInfo::get_ip();?>", 
    "device" : "<?= UserInfo::get_device();?>",
    "os" : "<?= UserInfo::get_os();?>",
    "browser" : "<?= UserInfo::get_browser();?>", 
    "postal" : "94107", 
    "latitude" : 37.7697, 
    "longitude" : -122.3933,
    "timezone" : "America/Los_Angeles"
}
	
