<?php 
require('UserInfo.php');
?>
{
    "ip" : "<?= UserInfo::getIP();?>", 
    "device" : "<?= UserInfo::getDevice();?>",
    "os" : "<?= UserInfo::get_os();?>",
    "browser" : "<?= UserInfo::get_browser();?>", 
    "language" : "<?= UserInfo::getLanguage();?>", 
    "country" : "<?= UserInfo::getCountryCode();?>", 
}
	
