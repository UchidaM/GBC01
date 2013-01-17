<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<head>
<title>GREE BOOT CAMP</title>
<link rel="stylesheet" type="text/css" href="text.css">
</head>
<BODY background="img000.jpg" >
<!--タイトルの表示-->
<div class="title">GREE BOOTCAMP</div>

<br /><br />
<font color="red">課題1</font>

<!--phpによる表記のテスト-->
<?php
	print "<br />";
	print "最初のテスト";
?>

<!--中間にHTMLを挟むことによる表示のテスト-->
<br /><br />
<font size="4" color="blue" face="ＭＳ ゴシック">シャッフルによるランダムの変更</font>

<!--シャッフルを利用したランダムの表示-->
<?php
	$male = array("HighRare", "rare", "normal", "bad");
	$last = array("monster", "male", "female", "robo");

	/*３回分表示する*/
	for($i = 0; $i <= 3;$i++)
	{
		shuffle($male);
		shuffle($last);
		print "<br />";

		/*表示する*/
		echo $male[0].' '.$last[0]; /*$i*/
	}

	/*現在時間の表示*/
	print "<br />";
	print "現在の時間：";
	print "<br />";
	$current_date = date("M d H "); /*M d H */
	print "$current_date <br />";
?>

</BODY>
</HTML>
