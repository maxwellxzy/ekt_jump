<?php
/*每天18点到次日7点访问维护页面，其余时间访问正常网站*/
	$hour = date(H);
	if($hour > 17 || $hour < 7){
		header("location:update.html");
	}
	else{
		header("location:http://ekt.szedu.com/dist/index.html#/");
	}

	//test
?>

