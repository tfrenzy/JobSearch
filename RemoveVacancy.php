<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Welcome page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
</head>
<body bgcolor="#14285f">
<?php
if ($_SESSION['category'].length > 0) {
	?>
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
	&nbsp; &nbsp; <a href="welcome2.php">home</a><br />	</td>
  </tr>
  <tr>
    <td width="50" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"><br />
	<table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="subHeader" colspan="2"><p style="margin-top: 0; margin-bottom: 0;">Post Job Vacancy </p>
          </td>
        </tr>
        <tr>
          <td width="40" height="250" align="center" class="subHeader">&nbsp;</td>
          <td width="562" class="sidebarHeader"><form id="form1" name="form1" method="post" action=""><?php
		   $sql = "SELECT * FROM `jobalert` WHERE `IssuingCompany` = '$_SESSION[user]'";
			  $result = mysql_query($sql);
           for ($r = 0; $r <= mysql_num_rows($result)-1; $r++) {
				  $name = mysql_result($result, $r, "Name");
				  $check = "check$r";
			  if ($_POST['$check'] == "Yes") {
			$sql2 = "DELETE FROM `jobalert` WHERE `IssuingCompany` = '$_SESSION[user]'";
			$result2 = mysql_query($sql);
			  }
			  ?>
            <p>
              <label for="select"></label>
            </p>
            <table width="709" border="1">
              <tr>
                <td width="174">Job Type</td>
                <td width="439">Job Description</td>
                <td width="74">Select</td>
              </tr>
              <tr>
                <?php
			  $sql = "SELECT * FROM `jobalert` WHERE `IssuingCompany` = '$_SESSION[user]'";
			  $result = mysql_query($sql);
			  for ($r = 0; $r <= mysql_num_rows($result)-1; $r++) {
			?>
                <td><?php echo mysql_result($result, $r, "JobType"); ?></td>
                <td><?php echo mysql_result($result, $r, "JobDescription"); ?></td>
                <td><input type="checkbox" name="check<?php echo $r?>" id="checkbox" /></td>
                <?php
			  }
			  ?>
              </tr>
              <tr>
                <td colspan="3" align="center"><input type="submit" name="button" id="button" value="Remove selected" /></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </form>
          <p>&nbsp;</p><p>&nbsp;</p></td>
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
<?php }
else {
	?>
    <p><h2> You are not logged in </h2></p>
    <?php
}
?>
</body>
</html>
