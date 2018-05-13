<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>Unilorin Complaint Portal- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT;?>include/boot.css" rel="stylesheet" type="text/css">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<!--My stylesheets -->

<link href="<?php echo WEB_ROOT;?>include/sam.css" rel="stylesheet" type="text/css">

</head>
<body>
<br/>
<br/>
<table  width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/unilorin.png" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table style="box-shadow: 5px 5px 30px grey;" width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td align="center"><span style="font-family:sans-serif; font-size: 16px; ">:: User Login ::</span></td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>

		  <table  width="100%" border="0" cellpadding="2" cellspacing="5" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td id="loglabel" align="left">User ID </td>
            <td width="10" align="center">:</td>
            <td><input id="input" name="txtUserName" type="text" class="box" id="txtUserName"  size="30" maxlength="40"></td>
           </tr>
           <tr>
             <td id="loglabel" align="left">Password</td> <td align="center">:</td>
             <td><input id="input" name="txtPassword" type="password" class="box" id="txtPassword" size="30" maxlength="40"></td>
             
           </tr>
           <tr> 
            <td  style="min-width: 60px; padding-left: 10px;" align="left">User Type</td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="utype" class="box">
			  <option >&nbsp;-- Select User -- &nbsp;</option>
			  <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="customer">&nbsp;&nbsp; Student &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Staff &nbsp;</option>
              </select>
              </label></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="right">First time? <a href="register.php">Register Here</a> </div></td>
           </tr>
           <tr>
             <td colspan="3"><div align="right"><a href="forget-password.php">Forget Password</a> </div></td>
             </tr>
           <tr> 
            <td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td colspan="3" class="btnposition">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button  id="mybtn" class="btn btn" name="btnLoginbtnLogin" type="submit">Login</button> 
                </td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<p>Powered By: <a>ICS INFORMATICS GROUP 1</a></p>
</body>
</html>
 <!--<input name="btnLogin" type="submit" id="btnLogin" value=" Login Now ">-->