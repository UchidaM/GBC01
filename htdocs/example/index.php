<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<head>
<title>GREE BOOT CAMP</title>
<link rel="stylesheet" type="text/css" href="text.css">
</head>
<BODY background="img000.jpg" >
<!--�^�C�g���̕\��-->
<div class="title">GREE BOOTCAMP</div>

<br /><br />
<font color="red">�ۑ�1</font>

<!--php�ɂ��\�L�̃e�X�g-->
<?php
	print "<br />";
	print "�ŏ��̃e�X�g";
?>

<!--���Ԃ�HTML�����ނ��Ƃɂ��\���̃e�X�g-->
<br /><br />
<font size="4" color="blue" face="�l�r �S�V�b�N">�V���b�t���ɂ�郉���_���̕ύX</font>

<!--�V���b�t���𗘗p���������_���̕\��-->
<?php
	$male = array("HighRare", "rare", "normal", "bad");
	$last = array("monster", "male", "female", "robo");

	/*�R�񕪕\������*/
	for($i = 0; $i <= 3;$i++)
	{
		shuffle($male);
		shuffle($last);
		print "<br />";

		/*�\������*/
		echo $male[0].' '.$last[0]; /*$i*/
	}

	/*���ݎ��Ԃ̕\��*/
	print "<br />";
	print "���݂̎��ԁF";
	print "<br />";
	$current_date = date("M d H "); /*M d H */
	print "$current_date <br />";
?>

</BODY>
</HTML>
