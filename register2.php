<?php
if(isset($_POST['next2']))
{
$bname = $_POST['bname'];
$nokr = ($_POST['nokr']);
$nok = ($_POST['nok']);
$baddress = $_POST['baddress'];
$amount = $_POST['amount'];
$pmode = $_POST['pmode'];
$reg_date = $_POST['rday']."/".$_POST['rmonth']."/".$_POST['ryear'];
$pduration = ($_POST['pduration']);
$bank = $_POST['bank'];
$pass = "files/".$_FILES['pass']['name'];
if(move_uploaded_file($_FILES['pass']['tmp_name'], $pass))
{
$message = "";
}
else {
$message = "<h4>File not uploaded</h4>";
}
$signature = "file1/".$_FILES['signature']['name'];
if(move_uploaded_file($_FILES['signature']['tmp_name'], $signature))
{
$message = "";
}
else {
$message = "<h4>File not uploaded</h4>";
}


//These are the variables for the email 
require_once("connections.php");
mysql_select_db("gfacsl") or die(mysql_error());
$query = "UPDATE members SET bname='$bname', baddress='$baddress', nok='$nok', nokr='$nokr',  amount='$amount', pmode='$pmode', pduration='$pduration', bank='$bank', pass='$pass',reg_date='$reg_date', signature='$signature'";
$file = mysql_query($query) or die(mysql_error());
if($file)
{
$message .= "<h3><br>Submission Successful!. <br/></h3>";
header("location:register3.php");
}
else
{
$message .= "<h3><br>Submission Not successful</h3>";
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
  <div align="center"><a href="index.html">nHOME</a>||<a href="about.html"> ABOUT</a> |<a href="contact.php">| CONTACT</a> ||</div>
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
    <form id="form2" name="form2" method="post" action="">
      <fieldset>
      <legend>MEMBERSHIP FORM</legend>
      <table width="520" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2"><div align="center"><strong>PAYMENT INFORMATION</strong></div></td>
        </tr>
        <tr>
          <td width="102">Branch Name</td>
          <td width="250"><label>
            <input type="text" name="bname" id="bname" />
          </label></td>
        </tr>
        <tr>
          <td>Branch Address</td>
          <td><label>
            <input type="text" name="baddress" id="baddress" />
          </label></td>
        </tr>
        <tr>
          <td>Next of Kin</td>
          <td><label>
            <input type="text" name="nok" id="nok" />
          </label></td>
        </tr>
        <tr>
          <td>Relationship with Next of kin</td>
          <td><label>
            <input type="text" name="nokr" id="nokr" />
          </label></td>
        </tr>
        <tr>
          <td>Payment Amount</td>
          <td><label>
            <input type="text" name="amount" id="amount" />
          </label></td>
        </tr>
        <tr>
          <td>Payment Mode</td>
          <td><label>
          <select name="pmode" size="1" id="pmode">
            <option value="payment mode">payment Method</option>
            <option value="atm">ATM</option>
            <option value="mobile transfer">Mobile Transfer</option>
            <option value="bank deposit">Bank Deposit</option>
            <option value="cash">Cash</option>
          </select>
          </label></td>
        </tr>
        <tr>
          <td>Payment Duration</td>
          <td><label>
          <select name="pduration" id="pduration">
            <option value="payment">Payment Mode</option>
            <option value="day">Daily</option>
            <option value="week">Weekly</option>
            <option value="month">Monthly</option>
            <option value="year">Yearly</option>
          </select>
          </label></td>
        </tr>
        <tr>
          <td>Operational Bank</td>
          <td><label>
            <input type="text" name="bank" id="bank" />
          </label></td>
        </tr>
        <tr>
          <td>Passport</td>
          <td><label>
            <input type="file" name="pass" id="pass" />
            <br />
            <span class="style1">Note your passport should have white background</span><br />
            </label>
          </td>
        </tr>
        <tr>
          <td>Date of Registration</td>
          <td><span class="style23 style23">
            <label><span class="style1">Day:</span>
            <select name="rday" id="rday">
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
            <span class="style1">Month:</span>
            <select name="rmonth" id="rmonth">
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
            <span class="style1">Year:</span>
            <label></label>
            <select name="ryear" id="ryear">
              <option selected="selected">Year</option>
              <option value="2011">2023</option>
              <option value="2010">2022</option>
              <option value="2009">2021</option>
              <option value="2008">2020</option>
              <option value="2007">2019</option>
              <option value="2006">2018</option>
              <option value="2005">2017</option>
              <option value="2004">2016</option>
              <option value="2003">2015</option>
              <option value="2002">2014</option>
              <option value="2001">2013</option>
              <option value="2000">2012</option>
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
          <td>signature</td>
          <td><label>
            <input type="file" name="signature" id="signature" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><p>Are you ready to abide by the bye law of our schem?</p>
              <p align="center"><a href="register1.php">Yes
                <label> </label>
                </a>
                  <label>
                  <input type="radio" name="radio" id="yes" value="yes" />
                  </label>
                  <label> No
                    <input type="radio" name="radio" id="no" value="no" />
                  </label>
            </p></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <label>
              <input type="button" name="back2" id="back2" value="Back" />
              </label>
              <label>
              <input type="submit" name="next2" id="next2" value="Next" />
              </label>
          </div></td>
        </tr>
      </table>
      </fieldset>
      
    </form>
    </div>
</div>


<div class="last" id="kop">
  <div class="label" id="label">
  <div align="left">
    <p class="style11">Head Quaters: God's Foundation Academy <br />
      Along Zenith Bank Road <br />
      Kontangora, Niger State.    </p>
    </div>
</div>
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
