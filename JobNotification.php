<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <td width="360" height="58" nowrap="nowrap" id="logo" valign="bottom">JOB SEEKER</td>
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
	&nbsp; &nbsp; <a href="welcome2.php">home</a><br />	</td>
  </tr>
  <tr>
    <td width="50" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"><br />
	<table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="subHeader" colspan="3"><p style="margin-top: 0;">JOB NOTIFICATION</p>
            <p style="margin-bottom: 0;">&nbsp;</p>            </td>
        </tr>
        <tr>
          <td width="595" height="250" rowspan="2" align="left" class="subHeader"><form action="" method="post" name="form1" class="detailText" id="form1">
          <?php
		  $sql = "INSERT INTO `jobalert` VALUES('$_POST[textfield]', '$_POST[textarea]', '$_SESSION[user]', '$_POST[select])";
		  $result = mysql_query($sql);
		  if ($result == 1) {echo "Successfully posted"}
		  else {echo "Problem with posting"}
		  ?>
            <table width="550" border="0">
                                          <tr>
                                            <th width="268" scope="row">Job type </th>
                                            <td width="272"><label>
                                              <input type="text" name="textfield" id="textfield" />
                                            </label></td>
                </tr>
                                          <tr>
                                            <th scope="row">Job description</th>
                                            <td><label>
                                              <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Discipline of applicants needed</th>
                                            <td><label>
                                              <select name="select" id="select">
                                              </select>
                                            </label></td>
                                          </tr>
                                          <tr>
                                            <th colspan="2" scope="row"><label>
                                              <input type="submit" name="button" id="button" value="Submit" />
                                            </label></th>
                                          </tr>
                                        </table>
          </form>
          </td>
          <td width="1" rowspan="2">&nbsp;</td>
          <td width="2" class="sidebarHeader">&nbsp;</td>
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
