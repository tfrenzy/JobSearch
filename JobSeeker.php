<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Job seeker information</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
</head>
<body bgcolor="#14285f">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<?php
include("connection.inc");
if (isset($_POST['button'])) {
	$realname = $_POST['textfield'];
	$name = str_replace(" ","_",$realname);
	$address = $_POST['textfield2'];
	$city = $_POST['select4'];
	$phoneno = $_POST['textfield3'];
	$qualification = $_POST['textfield5'];
	$schattend = $_POST['select'];
	$degreetype = $_POST['select2'];
	$discipline = $_POST['select3'];
	$username = $_POST['textfield4'];
	$password = $_POST['textfield6'];
	
	$_SESSION['tempname'] = $realname;
	
	//Handling file uploads
	define ("FILEREPOSITORY","C:/wamp/www/JobSearch/uploads");
	if (($_FILES['fileField']['type'] != "image/pjpeg") ||($_FILES['fileField2']['type'] != "application/pdf")||($_FILES['fileField3']['type'] != "application/pdf") ||($_FILES['fileField4']['type'] != "application/pdf")) {
echo "<p>Documents must be uploaded in PDF format, Passport in JPG format.</p>";
}

else {
$result = move_uploaded_file($_FILES['fileField']['tmp_name'], FILEREPOSITORY."/"."$name"."1".".jpg");
if ($result == 1) {
	echo "<p>Passport successfully uploaded.</p>";
$passport = FILEREPOSITORY."/"."$name"."1".".jpg";
}
else {
	echo "<p>There was a problem uploading passport. Retry</p>";
}

$result2 = move_uploaded_file($_FILES['fileField2']['tmp_name'], FILEREPOSITORY."/"."$name"."2".".pdf");
if ($result2 == 1) {
	echo "<p>CV successfully uploaded.</p>";
$curriculum = FILEREPOSITORY."/"."$name"."2".".pdf";
}
else {
	echo "<p>There was a problem uploading CV. Retry</p>";
}
$result3 = move_uploaded_file($_FILES['fileField3']['tmp_name'], FILEREPOSITORY."/"."$name"."3".".pdf");
if ($result3 == 1) {
	echo "<p>Certificate successfully uploaded.</p>";
$higher = FILEREPOSITORY."/"."$name"."3".".pdf";
}
else {
	echo "<p>There was a problem uploading certificate. Retry</p>";
}
$result4 = move_uploaded_file($_FILES['fileField4']['tmp_name'], FILEREPOSITORY."/"."$name"."4".".pdf");
if ($result4 == 1) {
	echo "<p>NYSC certificate successfully uploaded.</p>";
$nysc = FILEREPOSITORY."/"."$name"."4".".pdf";
}
else {
	echo "<p>There was a problem uploading NYSC certificate. Retry</p>";
}
if (($result == 1)&&($result2 == 1)&&($result3 == 1)&&($result4 == 1)) {

$sqll = "INSERT INTO `person` VALUES('$realname', '$address', '$city', '$phoneno', '$qualification', '$passport', '$schattend', '$degreetype', '$discipline', '$curriculum', '$higher', '$nysc', '$username', '$password', 'Not verified');";

$sqlresult = mysql_query($sqll);

if ($sqlresult == 1) {
echo "Registration successful";
}
else {
	echo "Problem registering candidate";
}
}
}
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
          <td class="subHeader" colspan="3"><p style="margin-top: 0;">PERSONAL DETAILS</p>
            <p style="margin-bottom: 0;">&nbsp;</p>            </td>
        </tr>
        <tr>
          <td width="21" height="250" rowspan="2" align="center" class="subHeader">&nbsp;</td>
          <td width="16" rowspan="2">&nbsp;</td>
          <th width="561">Personal Details
		  <br />          </th>
        </tr>
        <tr>
          <td valign="top" class="bodyText"><table width="524" border="0">
              <tr>
                <th width="191" scope="row">Name</th>
                <td width="323"><label>
                  <input type="text" name="textfield" id="textfield" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">Address</th>
                <td><label>
                  <input type="text" name="textfield2" id="textfield2" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">City</th>
                <td><select name="select4" id="select4">
                  <option selected="selected">Port Harcourt</option>
                  <option>Calabar</option>
                  <option>Owerri</option>
                  <option>Lagos</option>
                  <option>Ibadan</option>
                  <option>Illorin</option>
                  <option>Abeoukuta</option>
                  <option>Kano</option>
                </select></td>
              </tr>
              <tr>
                <th scope="row">Phone Number</th>
                <td><label>
                  <input type="text" name="textfield3" id="textfield3" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">Qualification</th>
                <td><label>
                  <input type="text" name="textfield5" id="textfield5" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">Passport</th>
                <td><label>
                  <input type="file" name="fileField" id="fileField" />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row">Educational Details</th>
                </tr>
              <tr>
                <th scope="row">School Attended</th>
                <td><label>
                  <select name="select" id="select">
                    <option selected="selected">University of Port Harcourt</option>
                    <option>Rivers State University of Science and Technology</option>
                    <option>University of Lagos</option>
                    <option>University of Ibadan</option>
                    <option>Lagos State University</option>
                    <option>Federal University of Technology Owerri</option>
                    <option>Univeristy of Calabar</option>
                    <option>Obafemi Awolowo University Ile Ife</option>
                                                      </select>
                </label></td>
              </tr>
              <tr>
                <th scope="row">Type of Degree</th>
                <td><label>
                  <select name="select2" id="select2">
                    <option>Bachelor's Degree</option>
                    <option>Higher National Diploma</option>
                    <option>Ordinary National Diploma</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <th scope="row">Discipline</th>
                <td><label>
                  <select name="select3" id="select3">
                    <option>Electrical/Electronic Engr</option>
                    <option>Marketing</option>
                    <option>Business Admin</option>
                    <option>Education</option>
                    <option>Geology</option>
                    <option>Anatomy</option>
                    <option>Medicine</option>
                    <option>Computer Science</option>
                    <option>Statistics</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row">Upload documents (in .pdf or .doc)</th>
                </tr>
              <tr>
                <th scope="row">Curiculum Vitae</th>
                <td><label>
                  <input type="file" name="fileField2" id="fileField2" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">Higher Institution certificate</th>
                <td><label>
                  <input type="file" name="fileField3" id="fileField3" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">NYSC certificate</th>
                <td><label>
                  <input type="file" name="fileField4" id="fileField4" />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row">Logon Details</th>
                </tr>
              <tr>
                <th scope="row">Username</th>
                <td><label>
                  <input type="text" name="textfield4" id="textfield4" />
                </label></td>
              </tr>
              <tr>
                <th scope="row">Password</th>
                <td><label>
                  <input type="text" name="textfield6" id="textfield6" />
                </label></td>
              </tr>
              <tr>
                <th colspan="2" scope="row"><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></th>
                </tr>
            </table></td>
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
