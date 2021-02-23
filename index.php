<?php 
require('UserInfo.php');
?>



</head>
<body>
<center><h2>UserInfo demo</h2></center>


	<table>
		<tr>
			<th>Ip</th>
			<th>Device</th>
			<th>Os</th>
			<th>Browser</th>
		</tr>
		<tr>
			<td><?= UserInfo::get_ip();?></td>
			<td><?= UserInfo::get_device();?></td>
			<td><?= UserInfo::get_os();?></td>
			<td><?= UserInfo::get_browser();?></td>
		</tr>
	</table>

</body>
</html>
