<?php
session_start();
require_once("conn.php");
if(isset($_POST['login']))
{
$email = $_POST['email'];
$name = $_POST['name'];
$query = "SELECT  email,pass FROM members WHERE email = '$email' AND name = '$name'";
$doQuery = mysql_query($query);

if(mysql_num_rows($doQuery) >  0)
{    
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	header("Location: index.html");
}
else
{
	$message = "Error logging in";
	header("Location: members.php?login=0");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="image/images.jpeg" rel="shortcut icon">
<title>LOGIN2</title>
<style type="text/css">
<!--
@import url("lime.css");
-->
</style>
<link href="lime" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style13 {
	color: #00FF00;
	font-size: 10px;
}
-->
</style>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
.spry{
background-color:#FFFFFF;
position:relative;
margin:auto;
width:387px;}
.add{
	position:absolute;
	left: 757px;
	top: 957px;
	width: 308px;
	height: 110px;
}
.label{
float:left;
	position:left;
	height: 100px;
	width: 324px;
	visibility: visible;
}
.label2{
	float:right;
	position:right;
	width: 324px;
	visibility: visible;
}
.div{
	position:absolute;
	left: 158px;
	top: 63px;
	height: 57px;
	width: 411px;
}
.last{
position:relative;
width:1000;
background-color:#666666;
margin:auto;
}
.line{
	position:relative;
	left: 238px;
	width: 335px;
	height: 39px;
}
.divf{
	float:right;
	margin-top:70px;
	position:absolute;
	left: 852px;
	top: -38px;
	width: 222px;
	height: 59px;
}
.divg{
	background-color:#FF0000;
	width:1200;
	position:center;
	margin-top:0;
}
.divlogo{
background-color:#990000;
width:1000;
position:relative;
margin:auto;
}
.style7 {
	font-family: Lucida Fax;
	font-size: 30px;
	color: #00CC00;
	font-weight: bold;
}
.style10 {
	font-size: 24px;
	font-family:Blackadder ITC;
	color: #00CC00;
	font-weight: bold;
}
.divb{
	position:relative;
	margin-top:0;
	width:800px;
	border:thick;
	border-left-color:#000000;
	height:auto;
	margin:auto;
}
.divpicture {
	position:relative;
	width:693px;
	visibility: visible;
	margin:auto;
	
}
.divlink{
	float:right;
	font:"comic Sans MS";
	left: 940px;
	top: 18px;
	width: 157px;
	background-color:#00CC00;
	visibility: visible;
}
.min{
	position:relative;
	visibility: visible;
	height:auto;
	width:857px;
	overflow: visible;
	margin:auto;
}
.style11 {color: #FFFFFF}
</style>

<body>
<div class="divlogo">
    <div id="logo">
      <div class="divf" id="f">
        <form id="form1" name="form1" method="post" action="">
          <label>
          <input type="text" name="textfield" id="textfield" />
          <input type="submit" name="button" id="button" value="Submit" />
          </label>
          <p>&nbsp;</p>
        </form>
      </div>
      <div class="div" id="name">
      <span class="style7">GFAC</span> <span class="style10">SUCCESS LINK</span>
      😆😆
      </div>
    <img src="image/images.jpeg" width="146" height="129" /></div>
</div>
<div class="divg" id="g">
  <div align="center"><a href="index.html">HOME</a>||<a href="about.html"> ABOUT</a> |<a href="contact.php">| CONTACT</a> ||</div>
</div>
<div class="divb" id="T">
  <div class="spry" id="spry">
    <ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a href="index.html">Login </a>
          <ul>
            <li><a href="members.php">Membbers Login</a></li>
            <li><a href="index.html" class="MenuBarItemSubmenu">Executive Login</a>
                <ul>
                  <li><a href="chairman.php">Chairman Login</a></li>
                  <li><a href="secetary.php">Secetery Login</a></li>
                  <li><a href="tresurer.php">Treasurer Login</a></li>
                </ul>
            </li>
          </ul>
      </li>
      <li><a href="online.php">Oline counselor</a></li>
      <li><a href="register.php">Sig up</a></li>
    </ul>
    <p>&nbsp;</p>
  </div>
  <div class="divpicture" id="picture">
    <div align="center"><img src="image/images-1.jpeg" width="613" height="227" /></div>
  </div>
  <div class="min" id="min">
    <fieldset>
    <fieldset>
    <legend>LOGIN</legend>
    <p align="center">&nbsp;</p>
    <div align="justify"></div>
    <p align="center">
      <label></label>
      Already a member? Login to your page</p>
    <form action="" method="post" enctype="multipart/form-data" name="form" id="form">
      <p align="center">
        <?php 
	if(isset($_GET['login']))
	{
		echo "<h4 style='color: red'>Login unsuccessful</h4>";
	}
	?>
      </p>
      <table width="312" height="73" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="99">EMAIL</td>
          <td width="207"><input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td>PMB NO :</td>
          <td><input type="password" name="name" id="name" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="login" type="submit" id="login" value="Sign up" /></td>
        </tr>
      </table>
        <p align="center">&nbsp;</p>
    </form>
    </fieldset>
    <p align="center">
      <label></label>
    </p>
    <p align="center">Fogotten your password ? </p>
    <p align="center">help?</p>
    <div align="center">
      <p>Not a member yet?</p>
      <p><a href="register.html">become a member</a><br align="center" />
      </p>
    </div>
    <legend></legend>
    </fieldset>
  </div>
</div>


<div class="last" id="kop">
  <div class="label" id="label"><span class="style11">Head Quaters: God's Foundation Academy <br />
Along Zenith Bank Road <br />
Kontangora, Niger State. </span></div>
  <div class="label2" id="label3">
    <p align="right" class="style11">contact:<br />
      07060899888<br />
      09077031002</p>
    <p align="right"><span class="style11">All right reseved</span><br />
    <span class="style13"><font face="comic Sans MS">powered by pop star</font></span> </p>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>..
  </p>
  <p>&nbsp;</p>
</div>


<script type="text/javascript">
<!--
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
