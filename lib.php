<?php
/*$config['ip'] = "202.204.193.249";
$config['port'] = "8889";
$config['dictionary'] = "/";*/
function getcookie($config,$zjh,$mm)
{
	$link = fsockopen($config['ip'],$config['port'],$errno,$errstr,30);
	if (!$link) exit ( $errstr . " ==> " . $errno);
	$seekcookie = 0;
	$cookie = 0;
	$out = "GET " . $config['dictionary'] . "loginAction.do?zjh=" . $zjh . "&mm=" . $mm . " HTTP/1.1\r\n";
	$out .= "Host: " . $config['ip'] . ":" . $config['port'] . "\r\n";
	$out .= "Connection: close\r\n\r\n";
	fwrite($link, $out);
	while (!feof($link))
		{
		$seekcookie = fgets($link, 128);
		$seekcookie = explode(" ",$seekcookie);
		if (strncasecmp($seekcookie[1],"JSESSIONID",10) == 0) 
			{
				$cookie = $seekcookie[1];
//				$cookie = str_replace(";","",$cookie);
				$cookie = chop($cookie,";");
//				echo $cookie;
				break;
			}
		}
	fclose($link);
	return $cookie;
}


function doaction($config,$url,$cookie)
{
	$link = fsockopen($config['ip'],$config['port'],$errno,$errstr,30);
	$out = "GET " . $config['dictionary'] . $url . " HTTP/1.1\r\n";
	$out .= "Host: " . $config['ip'] . ":" . $config['port'] . "\r\n";
	$out .= "Cookie: " . "$cookie" . "\r\n";
	$out .= "Connection: close\r\n\r\n";
	fwrite($link, $out);
	$backstr = "";
	while (!feof($link)) 
		{
			$backstr .= fgets($link, 2048);
		}
	fclose($link);
	return mb_convert_encoding($backstr,'utf-8','gbk');
}
function picksinglecourse($config,$kcid,$kcbj,$cookie)
{
	doaction($config,"xkAction.do?actionType=6",$cookie);
	doaction($config,"xkAction.do?actionType=5&skxq=&skjc=&pageNumber=-2&kch=" . $kcid . "&cxkxh=" . $kcbj,$cookie);
	return doaction($config,"xkAction.do?actionType=9&preActionType=5&kcId=" . $kcid . "_" . $kcbj,$cookie);
}


function check_success ($backstr)
{
$backstr = substr($backstr,0,4000);
$backstr = str_replace("\t","",$backstr);
if (!((stripos($backstr,"上课时间冲突",0)) || (stripos($backstr,"已经选择了",0)) || (stripos($backstr,"选课成功",0)))) return false; else return true;
}

function build_repick ($zjh,$mm,$profile,$kcid,$bjid,$backstr)
{
echo "<html><head><META HTTP-EQUIV=\"Refresh\" CONTENT=\"60; URL=action.php?zjh=$zjh&mm=$mm&profile=$profile&action=7&kcid=$kcid&bjid=$bjid\"><meta http-equiv=\"pragma\" content=\"no-cache\"></HEAD><body><h1>Operation Considered Unsuccessful , Retry After 60 Seconds.</h1><h2>未检测到选课成功迹象，60秒后重试。</h2></br>";
echo $backstr;
}
?>
