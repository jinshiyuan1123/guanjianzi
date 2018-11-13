<?php
session_start();
//$_POST['userName'] = "";
$_SESSION['Msg']=$_POST;

if(empty($_POST['userName']))
{ 

    header("Location:./index.html");exit;}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>我的2018关键词-幸运签</title>
    </head>
    <body style="margin:0;">
		
        <div>
            <img src="index.php" style="width:100%"/>
			<img src="images/zmyh.png" alt="" width="100%"/>
			<div style="text-align: center;"><a href="http://www.wangshoubai.com/dabai/erwei/1.jpg"">关注我们-更多精彩</a>
        </div>
    </body>
</html>