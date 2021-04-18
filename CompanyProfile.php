<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Company Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
</head>
<body bgcolor="#14285f">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php
include("connection.inc");
if (isset($_POST['button'])) {
$compname = $_POST['textfield'];
$compname2 = str_replace(" ","_",$compname);
$regno = $_POST['textfield2'];
$address = $_POST['textfield3'];
$city = $_POST['select2'];
$person = $_POST['textfield4'];
$email = $_POST['textfield5'];
$post = $_POST['textfield6'];
$classification = $_POST['select'];
$username = $_POST['textfield7'];
$password = $_POST['textfield8'];

$_SESSION['tempname'] = $compname;

	define ("FILEREPOSITORY","C:/wamp/www/JobSearch/uploads");
	if (($_FILES['fileField']['type'] != "image/pjpeg")) {
echo "<p>Documents must be uploaded in JPG format.</p>";
}

else {
$result = move_uploaded_file($_FILES['fileField']['tmp_name'], FILEREPOSITORY."/"."$compname2"."1".".jpg");
if ($result == 1) {
	echo "<p>Logo successfully uploaded.</p>";
$logo = FILEREPOSITORY."/"."$compname2"."1".".jpg";
}
else {
	echo "<p>There was a problem uploading logo. Retry</p>";
}
}
$sql = "INSERT INTO `company` VALUES('$compname', '$regno', '$address', '$city', '$person', '$email', '$post', '$classification', '$logo', '$username', '$password', 'Not verified')";
$result = mysql_query($sql);
//if ($result == 1) 
}
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
	&nbsp; &nbsp; <a href="javascript:;">home</a><br />	</td>
  </tr>
  <tr>
    <td width="50" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"><br />
	<table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="subHeader" colspan="2"><p style="margin-top: 0; margin-bottom: 0;">COMPANY PROFILE</p>
            </td>
        </tr>
        <tr>
          <td width="40" height="250" align="center" class="subHeader">&nbsp;</td>
          <td width="562" class="sidebarHeader"><table width="504" border="0">
            <tr>
              <th width="243" scope="row">Name of Company</th>
              <td width="251"><label>
                <input type="text" name="textfield" id="textfield" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">Registration Number</th>
              <td><label>
                <input type="text" name="textfield2" id="textfield2" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">Address</th>
              <td><label>
                <input type="text" name="textfield3" id="textfield3" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">City</th>
              <td><label>
                <select name="select2" id="select2">
                  <option selected="selected">Port Harcourt</option>
                  <option>Calabar</option>
                  <option>Owerri</option>
                  <option>Lagos</option>
                  <option>Ibadan</option>
                  <option>Illorin</option>
                  <option>Abeoukuta</option>
                  <option>Kano</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <th scope="row">Contact Person</th>
              <td><label>
                <input type="text" name="textfield4" id="textfield4" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">Contact Email</th>
              <td><label>
                <input type="text" name="textfield5" id="textfield5" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">Post in Company</th>
              <td><input type="text" name="textfield6" id="textfield6" /></td>
            </tr>
            <tr>
              <th scope="row">Company Classification</th>
              <td><label>
                <select name="select" id="select">
                  <option selected="selected">Oil Servicing</option>
                  <option>Bank/Finance</option>
                  <option>Information Technology</option>
                  <option>Marketing</option>
                  <option>Insurance</option>
                  <option>Teaching</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <th scope="row">Logo</th>
              <td><label>
                <input type="file" name="fileField" id="fileField" />
              </label></td>
            </tr>
            <tr>
              <th colspan="2" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th scope="row">Username</th>
              <td><label>
                <input type="text" name="textfield7" id="textfield7" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <td><label>
                <input type="text" name="textfield8" id="textfield8" />
              </label></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th colspan="2" scope="row"><label>
                <input type="submit" name="button" id="button" value="Submit" />
              </label></th>
              </tr>
          </table>
            <br />
		  <br />          <p>&nbsp;</p></td>
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
</form>
<br />
</body>
</html>
