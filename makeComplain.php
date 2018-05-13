<link href="<?php echo WEB_ROOT;?>include/sam.css" rel="stylesheet" type="text/css">


<form action="process.php?action=makeComplain" method="post">

<table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
  <tr style="align: center;" id="entryTableHeader">
    <td class="center">:: Make Complains ::</td>
  </tr>
  <tr>
    <td class="contentArea"><div class="errorMessage" align="center"></div>
        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
          <tr align="center">
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Complain Type </td>
            <td class="content">
			<select name="compType" class="box">
				<option value="payment"> Payment Issues </option>
				<option value="security"> Security Issues </option>
				<option value="Misconduct"> Student Misconduct </option>
				<option value="harrassement"> Sexual Harrassement </option>
        <option value="Portal"> Portal Issues </option>
        <option value="others"> Other Complaint  </option>
		  </select>          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Complain Title </td>
            <td class="content"><input name="compTitle" type="text" class="box" id="compTitle" value="" size="50" maxlength="100" /></td>
          </tr>

          <tr class="entryTable">
            <td valign="top" class="label">&nbsp;Complain Description .</td>
            <td class="content"><textarea name="compDesc" cols="50" rows="6" class="box" id="compDesc"></textarea></td>
          </tr>


          <tr>
            <td width="200">&nbsp;</td>
            <td width="372">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Make Complain  "></td>
          </tr>
      </table></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>