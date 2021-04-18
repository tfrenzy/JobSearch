<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Entertainment - Product Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
</head>
<body bgcolor="#14285f">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="02021e">
    <td width="400" colspan="2" rowspan="2" nowrap="nowrap"><img src="mm_entertainment_image.jpg" alt="Header image" width="400" height="140" border="0" /></td>
    <td width="360" height="58" nowrap="nowrap" id="logo" valign="bottom">JOB SEARCH SITE</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="02021E">
    <td height="57" nowrap="nowrap" id="tagline" valign="top">Jovita</td>
	<td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

   <tr>
    <td colspan="4" bgcolor="#cc3300"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
   <tr>
    <td colspan="5" id="dateformat">&nbsp;<br />
	&nbsp; &nbsp; <a href="javascript:;">home</a><br />	</td>
  </tr>
  <tr>
    <td width="50" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"><br />
	<table border="0" cellspacing="0" cellpadding="2" width="571">
        <tr>
          <td class="subHeader" colspan="3"><p style="margin-top: 0;">PAYMENT</p>
            <p style="margin-bottom: 0;">&nbsp;</p>            </td>
        </tr>
        <tr>
          <td width="554" height="250" rowspan="2" align="left" class="subHeader"><form id="form1" name="form1" method="post" action="">
          <?php
		  include("connection.inc");
		  if (isset($_POST['button'])) {
			$sql = "INSERT INTO `paymentdetails` VALUES('$_SESSION[tempname]', '$_POST[textfield]', '$_POST[textfield2]', '$_POST[textfield3]', '$_POST[textfield4]');";
			$result = mysql_query($sql);
			if ($result == 1) {echo "Payment details entered successfully";}
			else {echo "Payment details entered successfully";}
		  }
		  ?>
            <p>Please enter your payment details</p>
            <table width="470" border="0">
              <tr>
                <th width="182" scope="row"><span class="detailText">Name on Credit/ATM card</span></th>
                <td width="278"><label>
                  <input type="text" name="textfield" id="textfield" />
                </label></td>
              </tr>
              <tr>
                <th scope="row"><span class="detailText">Issuing Bank</span></th>
                <td><label>
                  <input type="text" name="textfield2" id="textfield2" />
                </label></td>
              </tr>
              <tr>
                <th scope="row"><span class="detailText">Card Number</span></th>
                <td><label>
                  <input type="text" name="textfield3" id="textfield3" />
                </label></td>
              </tr>
              <tr>
                <th scope="row"><span class="detailText">3 digit pin </span></th>
                <td><label>
                  <input type="text" name="textfield4" id="textfield4" />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row"><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></th>
                </tr>
            </table>
            <p class="detailText">&nbsp;</p>
            <p class="detailText">&nbsp;</p>
            <p class="detailText">&nbsp;</p>
          </form>
          </td>
          <td width="1" rowspan="2">&nbsp;</td>
          <td width="4" class="sidebarHeader">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top" class="bodyText">&nbsp;</td>
        </tr>
    </table>	  </td>
	  <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50">&nbsp;</td>
    <td width="350">&nbsp;</td>
    <td width="360">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
<br />
</body>
</html>
