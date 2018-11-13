<?php
session_start();
header("content-type:image/jpeg");
$name=$_SESSION['Msg']['userName'];


if(empty($_COOKIE[md5($name.'bg')])){
	$filename="pic/".rand(1,70).".jpg";
	setcookie(md5($name.'bg'),$filename,time()+36000);
	
}else{
	$filename=$_COOKIE[md5($name.'bg')];
}
if(empty($_COOKIE[md5($name.'erwei')])){
	
	$src_img="erwei/".rand(1,4).".jpg";
	setcookie(md5($name.'erwei'),$src_img,time()+36000);
	
}else{
	$src_img=$_COOKIE[md5($name.'erwei')];
}
//$filename="pic/".rand(2,10).".jpg";
//$src_img="erwei/".rand(1,4).".jpg";



list($w,$h)=getimagesize($filename);
$img=imagecreatefromjpeg($filename);
$color=imagecolorallocate($img,0,0,0);// 生成的字体颜色




imagettftext($img,50,0,250,120, $color, "MSYHBD.TTF",$name."."); //定位生成的名字位置 ：【30字体大小,0,92,90位置,】
//imagettftext($img,22,0, 240,632, $color, "MSYHBD.TTF",$name."的性格成份分析表");  //定位下面生成第1行字的位置。【25字体大小,0, 200,730位置】
//imagettftext($img,16,0,633,633, $color, "MSYHBD.TTF","主编:".$name.".");//定位下面生成第2行字的位置。

list($width,$height)=getimagesize($src_img);
$src=imagecreatefromjpeg($src_img);
imagecopyresized($img,$src,315,1170,0,0,120,120, $width, $height);//定位2微码生成的位置。 330,800位置,0,0,120,120 大小,
imagejpeg($img);
