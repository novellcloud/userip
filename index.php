<?php 
require('UserInfo.php');
?>
{
    "ip" : "<?= UserInfo::get_ip();?>", 
    "device" : "<?= UserInfo::get_device();?>",
    "os" : "<?= UserInfo::get_os();?>",
    "browser" : "<?= UserInfo::get_browser();?>", 
    "language" : "<?= UserInfo::getLanguage();?>", 
    "color" : "<?= UserInfo::getColor();?>",
    "timezone" : "America/Los_Angeles"
}
	
