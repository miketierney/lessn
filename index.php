<?php

include('-/config.php');
include('-/db.php');

// redirect
if (isset($_GET['token']))
{
	if ($result = mysql_query('SELECT * FROM `'.DB_PREFIX.'urls` WHERE id='.base_convert($_GET['token'], 36, 10).' LIMIT 1'))
	{
		if ($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			header($_SERVER['SERVER_PROTOCOL'].' 301 Moved Permanently');
			header('Location:'.$row['url']);
			exit();
		}
	}
}

// no redirect
header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
header('Status:404');
die('404 Not Found');