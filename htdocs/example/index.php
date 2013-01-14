<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<title>GREE BOOT CAMP</title>
<link rel="stylesheet" type="text/css" href="text.css">
</head>
<BODY background="img000.jpg" >
<div class="title">GREE BOOTCAMP</div>

<br /><br />
<font color="red">課題1</font>

<?php
print "<br />";
print "最初のテスト";
?>

<br /><br />
<font size="4" color="blue" face="ＭＳ ゴシック">シャッフルによるランダムの変更</font>

<?php
$male = array("HighRare", "rare", "normal", "bad");
$last = array("monster", "male", "female", "robo");

for($i = 0; $i <= 3;$i++)
{
shuffle($male);
shuffle($last);
print "<br />";
echo $male[0].' '.$last[0]; /*$i*/
}

print "<br />";
print "現在の時間：";
print "<br />";
$current_date = date("M d H "); /*M d H */
print "$current_date <br />";
?>

</BODY>
</HTML>
