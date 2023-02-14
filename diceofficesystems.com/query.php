<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dice Office Systems</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script language="JavaScript" type="text/JavaScript" src="js/validation.js"></script>
<script>
function setClear(){
	document.form1.name.value = " ";
	document.form1.company.value = " ";
	document.form1.phone.value = " ";
	document.form1.email.value = " ";
	document.form1.msg.value = " ";
	document.form1.name.focus();
	return true;
}
function doValidation(){
	var illegalChars = /[\!\@\#\?\%\^\&\~\`\=\-\_\(\)\<\>\,\;\:\\\/\"\[\]]/;
	name=trim(document.form1.name.value);
	company=trim(document.form1.company.value);
	phone=trim(document.form1.phone.value);
	email=trim(document.form1.email.value);
	msg=trim(document.form1.msg.value);
	
	check=" ";
 	errMsg="";
	
	if(is_empty(name))
	{
	errMsg+="Please enter your Name !\n";
	}
	if(is_empty(company))
	{
	errMsg+="Please enter your Company Name !\n";
	}
	if(is_empty(phone))
	{
	errMsg+="Please enter your Phone Number !\n";
	}
	if(is_empty(email))
	{
	errMsg+="Please enter your Email address !\n";
	}
	else if(!is_email(email))
	{
	errMsg+="Please enter your Valid Email ID !\n";
	}
	if(is_empty(msg))
	{
	errMsg+="Please enter your Message !\n";
	}
	if(errMsg=="")
  {
     return true;
	 }
	 else
	 {
	 alert(errMsg);
	  return false;
	 }
}
</script>
</head>

<body>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" align="left" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="29%" align="left" valign="top"><img src="images/logo.jpg" width="282" height="102" /></td>
    	<td width="71%" align="right"><img src="images/logo-1.jpg" width="322" height="102" /></td>
	  </tr>
	</table>	</td>
  </tr>
  <tr align="left" valign="top">
    <td height="88" colspan="4" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td valign="middle" class="txt-11">&nbsp;</td>
        <td height="50" valign="middle" class="txt-11"> <br />
           </td>
        <td align="right" valign="middle" id="topLink">&nbsp;</td>
        <td width="68" align="right" valign="middle" id="topLink">&nbsp;</td>
      </tr>
      <tr>
        <td width="50" valign="middle" class="txt-11">&nbsp;</td>
        <td width="282" height="38" valign="middle" class="txt-11">&nbsp;</td>
        <td width="604" align="right" valign="middle" id="topLink"><a href="index.php">home</a> : <a href="subcat.php?cat=21">products</a> : <a href="query.php"  >query</a> : <a href="contact-us.php">contact us</a></td>
        <td width="68" align="right" valign="middle" id="topLink">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr align="left" valign="top">
    <td height="38" align="left" width="52">&nbsp;</td>
    <td colspan="2" width="884"><table width="884" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="181" align="left" valign="top" id="leftNav">

<ul>
