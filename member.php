<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">

  a:link {

font-size: 16px;

color: #fff;

text-decoration: none;

}

a:visited {

font-size: 16px;

color: #fff;

text-decoration: none;

}

a:hover {

font-size: 16px;

color: #FF9966;

text-decoration: underline;

}

</style>
<title>咖波工作室</title>
<style type="text/css">
.coverflow{
        width: 1190px;
        height: 624px;
        position: relative;
    }
    .coverflow>a{
        display: block;
        position: absolute;
        top:0;
        left:0;
        opacity: 0;
    filter: alpha(opacity=0);
    -webkit-animation: silder 12s linear infinite;
                    animation: silder 12s linear infinite;
    }
    .coverflow>a>img{
        max-width: 100%;
    }

/動畫關鍵影格/
    @-webkit-keyframes silder {
        8% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        38% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }
    @keyframes silder {
        8% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        38% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }


/每個圖片各延遲5秒/
    .coverflow>a:nth-child(3) {
        -webkit-animation-delay: 12s;
                animation-delay: 12s;

    }
	.coverflow>a:nth-child(2) {
        -webkit-animation-delay: 8s;
                animation-delay: 8s;

    }
	.coverflow>a:nth-child(1) {
        -webkit-animation-delay: 4s;
                animation-delay: 4s;

    }
	/滑入時停止播放/
.coverflow:hover>a{
-webkit-animation-play-state: paused;
animation-play-state: paused;
}
.coverflow:hover>a{
-webkit-animation-iteration-count: 100;
animation-iteration-count: 100;
}
.1 {
}
.font12 {
	color: #FFF;
}
.table {
	background-color: #141c33;
	text-align: center;
}
.font3 {
	font-size: 36px;
	text-align: center;
}
.title1 {
	height: auto;
	width: auto;
}
body {
	background-color: #000;
}
.table tr td .font12 {
	font-size: 36px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.fonr4 {
	font-size: 24px;
	color: #fff;
}
.top {
	background-color: #FFF;
}
ul { /* 取消ul預設的內縮及樣式 */
        margin: 0;
        padding: 0;
        list-style: none;
    }

    ul.drop-down-menu {
        border: #ccc 1px solid;
        display: inline-block;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 16px;
    }

    ul.drop-down-menu li {
        position: relative;
        white-space: nowrap;
        border-right: #ccc 1px solid;
    }

    ul.drop-down-menu > li:last-child {
        border-right: none;
    }

    ul.drop-down-menu > li {
        float: left; /* 只有第一層是靠左對齊*/
    }

     ul.drop-down-menu a {
        background-color: #6c6c6c;
        color: #fff;
        display: block;
        padding: 0 30px;
        text-decoration: none;
        line-height: 40px;

    }
    ul.drop-down-menu a:hover { /* 滑鼠滑入按鈕變色*/
        background-color: #ef5c28;
        color: #fff;
    }
    ul.drop-down-menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
        background-color: #ef5c28;
        color: #fff;
    }
	 ul.drop-down-menu ul {
        border: #ccc 1px solid;
        position: absolute;
        z-index: 99;
        left: -1px;
        top: 100%;
       min-width: 180px;
    }

    ul.drop-down-menu ul li {
        border-bottom: #ccc 1px solid;
    }

    ul.drop-down-menu ul li:last-child {
        border-bottom: none;
    }

    ul.drop-down-menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
        z-index: 999;
        top: 10px;
        left: 90%;
    }
	  ul.drop-down-menu ul { /*隱藏次選單*/
        display: none;
    }

    ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
        display: block;
    }
	 .linkstyle-1 {

font-size: 12px;

color: #FFf;
text-decoration: none;
}

.linkstyle-1 a{

font-size: 12px;

color: #fff;

text-decoration:underline;

}

.linkstyle-1 a:hover{

font-size: 12px;

color: #FFf;

text-decoration: none;

}
.red {
    color: red;
}
</style></head>

<body>
<table width="1190" border="0" align="center">
  <tr class="table">
    <td width="50" height="30" class="font3"><span class="font12"><span class="font3"><span class="fonr4">
        <ul class="drop-down-menu">
        <li><a href="#">☰</a>
            <ul>
                <li><a href="viewall.php">瀏覽賽事</a>
                </li>
                <li><a href="creatgame.php">創建比賽</a>
                </li>
                <li><a href="setmdex.html">設定</a>
                </li>
                <li><a href="#">回報問題</a>
                </li>
                <li><a href="logout.php">登出</a>
                </li>
            </ul>
        </li>
    </span></span></span></td>
    <td width="1000" class="top"><a href="index.html"><img src="images/index.png" width="1030" height="43" /></a></td>
    <td width="70" class="fonr4">
	<?php
	include("mysql_connect.inc.php");
	$DB->query("SET NAMES 'utf8'");
	 $sql = "SELECT * FROM register WHERE  acount = ".$_SESSION['acount']."";
	$result = $DB->query($sql) ;
    $row = $result->fetch_array(MYSQLI_ASSOC);//印出資料
    printf("%s", $row["id"]);
?>
	</td>
  </tr>
</table>
<table width="1190" border="0" align="center" cellpadding="0" cellspacing="0" class="table">
  <tr>
    <td colspan="5" class="1263">
    <div class ="coverflow">
    <a href="#"><img src="images/CSGO.png" width="1190" height="624"</a>
    <a href="#"><img src="images/FKGO.jpg" width="1190" height="624"</a>
    <a href="#"><img src="images/下載2.png" width="1190" height="624"</a>
    </div>
    </td>
  </tr>
  <tr>
    <td height="28" colspan="5" class="font3"><img src="images/index back.png" width="1190" height="29" /></td>
  </tr>
  <tr>
    <td width="205" height="500"><img src="images/1.png" width="205" height="500" /></td>
    <td width="205" height="500"><img src="images/2.png" width="205" height="500" /></td>
    <td width="205" height="500"><img src="images/3.png" width="205" height="500" /></td>
    <td width="205" height="500"><img src="images/4.png" width="205" height="500" /></td>
    <td width="205" height="500" valign="middle"><p><img src="images/5.png" width="205" height="500" /></p></td>
  </tr>
</table>
</body>
</html>
