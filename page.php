<?php 
session_start();
if(!isset($_SESSION['admission_no']))
{
header("Location:login2.php");
}
require_once("connections.php");
$user = $_SESSION['admission_no'];
$query = "SELECT * FROM register WHERE admission_no = '$user'";
$user = mysql_query($query) or die(mysql_error());
$user_det = mysql_fetch_assoc($user);
$toUse = $user_det['id'];

if(isset($_POST['button4']))
{
$bloodgrp = $_POST['bloodgrp'];
$genotype = $_POST['genotype'];
$pc = $_POST['pchallenged']."/".$_POST['othersp'];
$asth = $_POST['asth'];
$sickler = $_POST['sickler'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$pf_nationality = $_POST['pf_nationality'];
$pm_nationality = $_POST['pm_nationality'];
$p_occupation =$_POST['p_occupation'];
$p_address = $_POST['p_address'];
$phone_p = $_POST['phone_p'];
$res_address = $_POST['res_address'];
$p_address = $_POST['p_address'];
$phone_res = $_POST['phone_res'];
$p_email = $_POST['p_email'];
//These are the variables for the email 
require_once("connections.php");
$query = "UPDATE register SET bloodgrp='$bloodgrp', genotype='$genotype', pc='$pc', asth='$asth',sickler='$sickler', father_name='$father_name', mother_name='$mother_name', pf_nationality='$pf_nationality', pm_nationality='$pm_nationality', p_occupation='$p_occupation', p_address='$p_address', phone_p='$phone_p', res_address='$res_address', phone_res='$phone_res', p_email='$p_email' WHERE id='$toUse'";
$file = mysql_query($query) or die(mysql_error());
if($file)
{
$message .= "<h4><br> Successfully added</h4>";
header("Location:login2.php");
}
else
{
$message .= "<h4><br>Not successfully added</h4>";
//die(mysql_error());
}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="image/images.jpeg" rel="shortcut icon">
<title>GFAC</title>
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
      <li><a href="index.html">Login
        </a>
        <ul>
            <li><a href="members.php">Membbers Login</a></li>
            <li><a href="index.html" class="MenuBarItemSubmenu">Executive Login</a>
              <ul>
                <li><a href="#">Untitled Item</a></li>
                <li><a href="#">Untitled Item</a></li>
                <li><a href="#">Untitled Item</a></li>
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
    <legend>MEMBERSHIP FORM</legend>
    <div align="center">
      <legend>
      <?php if(isset($message)){echo $message ;} ?>
      </legend>
      <form id="form1" name="form1" method="post" action="">
        <div align="center"></div>
        <table width="575" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2"><div align="center"><strong>PERSONAL INFORMATION</strong></div></td>
          </tr>
          <tr>
            <td width="152">Name</td>
            <td width="551"><label>
              <input type="text" name="name" id="name2" />
            </label></td>
          </tr>
          <tr>
            <td>Sex</td>
            <td><label>
              <input type="radio" name="radio" id="male" value="male" />
              Male
              <input type="radio" name="radio" id="female" value="female" />
              Female</label></td>
          </tr>
          <tr>
            <td>Phone No.</td>
            <td><label>
              <input type="text" name="phoneno" id="phoneno" />
            </label></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label>
              <input type="text" name="email" id="email" />
            </label></td>
          </tr>
          <tr>
            <td>Home Address</td>
            <td><label>
              <textarea name="address" id="address" cols="25" rows="5"></textarea>
            </label></td>
          </tr>
          <tr>
            <td>Occupation</td>
            <td><label>
              <input type="text" name="occupation" id="occupation" />
            </label></td>
          </tr>
          <tr>
            <td>Nationality</td>
            <td><label>
              <input type="text" name="nation" id="nation" />
            </label></td>
          </tr>
          <tr>
            <td height="45">Date of Birth</td>
            <td><span class="style23 style23">
              <label><span class="style3">Day:</span>
              <select name="day" id="day">
                <option selected="selected">Day</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              </label>
              <span class="style3">Month:</span>
              <select name="month" id="month">
                <option selected="selected">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              </label>
              <span class="style3">Year:</span>
              <label></label>
              <select name="year" id="year">
                <option selected="selected">Year</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1902">1902</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
              </select>
              </span>
                <label></label></td>
          </tr>
          <tr>
            <td>Stae of Origin</td>
            <td><label>
              <input name="state" type="text" id="state" />
            </label></td>
          </tr>
          <tr>
            <td height="24">LGA</td>
            <td><label>
              <input type="text" name="lga" id="lga" />
              <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="2"><label>
                <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="150"><label>
                      <input name="reset" type="reset" id="reset" value="Reset" />
                    </label></td>
                    <td width="150"><label>
                      <input type="submit" name="next" id="next" value="Next" />
                    </label></td>
                  </tr>
              </table></td>
          </tr>
        </table>
      </form>
      </div>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
</html>
