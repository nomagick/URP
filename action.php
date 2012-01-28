<?php
if ($_GET['zjh'] && $_GET['mm'] && $_GET['profile'] && $_GET['action'])
{

	switch ($_GET['profile'])
	{
	case 2:
	//中国政法大学
	$config['ip'] = "202.205.64.80";
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 1:
	//中国石油大学(北京)
	$config['ip'] = "202.204.193.249";
	$config['port'] = "8889";
		$config['dictionary'] = "/";
	break;
	
	case 23:
	//北京邮电大学
	$config['ip'] = "123.127.134.40";//byjw.bupt.edu.cn
	$config['port'] = "8080";
	$config['dictionary'] = "/";
	break;
	
	case 3:
	//大连理工大学
	$config['ip'] = "202.118.65.18";
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 4:
	//河北工程大学
	$config['ip'] = "219.148.85.172";
	//202.206.161.174
	$config['port'] = "9080";
	$config['dictionary'] = "/";
	break;
	
	case 5:
	//太原理工大学
	$config['ip'] = "202.207.240.131";
	$config['port'] = "8089";
	$config['dictionary'] = "/";
	break;
	
	case 6:
	//西南石油大学
	$config['ip'] = "210.41.240.68";//xk.swpu.edu.cn
	$config['port'] = "8088";
	$config['dictionary'] = "/";
	break;
	
	case 7:
	//河北科技大学理工学院
	$config['ip'] = "202.206.64.208";
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	
	case 8:
	//河北省廊坊市北京化工大学北方学院
	$config['ip'] = "219.226.183.105";
	$config['port'] = "8080";
	$config['dictionary'] = "/";
	break;
	
	case 9:
	//北京服装学院
	$config['ip'] = "211.71.99.103";//mh.mis.bift.edu.cn
	$config['port'] = "8040";
	$config['dictionary'] = "/";
	break;
	
	case 10:
	//东北财经大学
	$config['ip'] = "202.199.165.191";//jwc.dufe.edu.cn
	$config['port'] = "8083";
	$config['dictionary'] = "/";
	break;
	
	case 11:
	//内蒙古大学
	$config['ip'] = "202.207.0.237";//jwxt.imu.edu.cn
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 12:
	//河北科技大学
	$config['ip'] = "121.28.97.203";//jw.hebust.edu.cn
	//202.206.64.205 202.206.161.175
	$config['port'] = "8080";
	$config['dictionary'] = "/";
	break;
	
	case 13:
	//安徽财经大学
	$config['ip'] = "211.86.241.171";//jw.aufe.edu.cn
	//211.86.241.172
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 14:
	//呼和浩特职业学院
	$config['ip'] = "202.99.248.10";
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 15:
	//上海海洋大学
	$config['ip'] = "202.121.64.20";
	$config['port'] = "9099";
	$config['dictionary'] = "/";
	break;
	
	case 16:
	//长安大学
	$config['ip'] = "202.117.64.48";//http://it.xahu.edu.cn/
	$config['port'] = "80";
	$config['dictionary'] = "/";
		break;
	
	/*南京农业大学
	$config['ip'] = "202.195.244.182";
	//202.195.244.183
	$config['port'] = "80";
	$config['dictionary'] = "/";*/
	
	case 17:
	//陕西师范大学
	$config['ip'] = "202.117.144.80";//jwxt.snnu.edu.cn
	$config['port'] = "8081";
	$config['dictionary'] = "/";
	break;
	
	case 18:
	//黑龙江科技大学
	$config['ip'] = "60.219.165.24";
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 19:
	//国际关系学院
	$config['ip'] = "123.127.108.167";//duirap36.uir.cn
	//duirap37
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 20:
	//天津城市建设学院
	$config['ip'] = "202.113.88.6";//blue.tjuci.edu.cn
	$config['port'] = "80";
	$config['dictionary'] = "/";
	break;
	
	case 21:
	//贵州大学
	$config['ip'] = "210.40.32.10";//acadm.gzu.edu.cn
	$config['port'] = "8091";
	$config['dictionary'] = "/";
	break;
	
	case 22:
	//盐城工业学院
	$config['ip'] = "222.188.0.6";
	$config['port'] = "8090";
	$config['dictionary'] = "/";
	break;

	case 24:
	//北京建筑工程学院
	$config['ip'] = "61.135.242.82";//http://jwmis.bucea.edu.cn/
	$config['port'] = "9080";
	$config['dictionary'] = "/";
	break;
	
	case 25:
	//北京工商大学嘉华学院
	$config['ip'] = "124.205.204.148";//http://jwxt.canvard.edu.cn/
	$config['port'] = "80";
	$config['dictionary'] = "/xfzzhjw/";
	break;

	case 26:
	//首都师范大学
	$config['ip'] = "202.204.208.73";//jzd.cnu.edu.cn:8033/
	$config['port'] = "8033";
	$config['dictionary'] = "/";
	break;
	
	case 27:
	$config['ip'] = "121.251.88.224"; //jw.hhuwtian.edu.cn/
	$config['port'] = "80";
	$config['dictionary'] = "/";
	
	default:
	exit ("Profile Invalid, Program Quit. 学校信息无效，已终止执行。");
	}
	require ("lib.php");
	$scookie = getcookie($config,$_GET['zjh'],$_GET['mm']);
	if (!$scookie) exit("Getting Cookie Failed.");
	if ($_GET['action'] == 1) 
	{echo doaction($config,"bxqcjcxAction.do",$scookie);}
	if ($_GET['action'] == 2)
	{echo doaction($config,"xkAction.do?actionType=6",$scookie);}
	if ($_GET['action'] == 3)
	{echo doaction($config,"syglSyxkAction.do?&oper=xsxkKcbAll",$scookie);}
	if ($_GET['action'] == 4)
	{
	if ($_GET['kcid']) {doaction($config,"xkAction.do?actionType=6",$scookie);echo doaction($config,"xkAction.do?actionType=5&skxq=&skjc=&pageNumber=-2&kch=" . $_GET['kcid'],$scookie);} else exit("Course ID Not Provided, Cannot List Classes. 未提供课程号，无法列出班级。");
	}
	if ($_GET['action'] == 5)
	{
		if ($_GET['kcid']&&$_GET['bjid']) echo picksinglecourse($config,$_GET['kcid'],$_GET['bjid'],$scookie); else exit("Course Information Not Enough. 课程信息提供不足");
	}
	if ($_GET['action'] == 6) 
	{
		if ($_GET['kcid']) echo doaction($config,"xkAction.do?actionType=10&kcId=" . $_GET['kcid'],$scookie);else exit("Course Information Not Enough. 课程信息提供不足");
	}
	if ($_GET['action'] == 7)
	{
		if ($_GET['kcid']&&$_GET['bjid'])
		{
			$backstr = picksinglecourse($config,$_GET['kcid'],$_GET['bjid'],$scookie);
			if ( check_success ($backstr) == false ) build_repick ($_GET['zjh'],$_GET['mm'],$_GET['profile'],$_GET['kcid'],$_GET['bjid'],$backstr);
			else echo $backstr;
		
		}
		else exit("Course Information Not Enough. 课程信息提供不足");
	}

}
else exit("Information Provided Is Not Enough. 所提供信息不足。");

?>
<div align="center">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-1578563983966931";
/* jhxs.org.2 */
google_ad_slot = "5638843145";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</html>
