<?php 
error_reporting(0);
@ini_set('display_errors', 0);
?>

<html>
<head>
<title>Clients Data Entry</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="main">
<center><h1>Agents Data Entry</h1></center>

<hr/>
<form name="form1" action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>
 <div>

<center>
<h1><u>Impiortant Notice ! ! !</u></h1>
<br>
<h3>
Please do not use an special characters when filling in the form.<br><br>
Dashes are allowed aswel as dots.<br><br>
These are examples of symbols not allowed: <br/><br/>
&#33;
&#34;
&#35;
&#36;
&#37;
&#38;
&#39;
&#40;
&#41;
&#42;
&#43;
&#44;
&#91;
&#92;
&#93;
&#94;
&#95;
&#96;
</h3>
<hr/>
<br>
<h2><u>After submitting the form you have to get this message, else the sale is not captured: </u><br/>
</h2>
<img src="success.PNG"></img>
<br><br>
<hr>
</center>
<br>

<h2>
 <center><strong>Agent Name:</strong>&emsp;<br/><br/>
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Rushka") echo "checked";?>" value="Rushka">Rushka
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Lutfi") echo "checked";?>" value="Lutfi">Lutfi
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Jainodien") echo "checked";?>" value="Jainodien">Jainodien
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Luke") echo "checked";?>" value="Luke">Luke
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Kasley") echo "checked";?>" value="Kasley">Kasley
  <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Michele") echo "checked";?>" value="Michele">Michele
<br/>
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Chavone") echo "checked";?>" value="Chavone">Chavone
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Zaireen") echo "checked";?>" value="Zaireen">Zaireen
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Nadine") echo "checked";?>" value="Nadine">Nadine
 <input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Azile") echo "checked";?>" value="Azile">Azile
<input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Khanyisa") echo "checked";?>" value="Khanyisa">Khanyisa
<input type="radio" name="agentname" <?php if (isset($agentname) && $agentname == "Megan") echo "checked";?>" value="Megan">Megan
	<br/>
	 <br/>
  <strong>Comments</strong>
 <input type="text" name="comments" size="90" alue="<?php echo $comments; ?>" /> 

<br/>
<br/>
 
 </center>

</h2>


<br/> 
 <div id="header-top">
 <h2>Personal Details:</h2>
 </div>
 
 <table width="100%">
 
       <tr><td>
 <strong>Are you a South African Citizen?:</strong>
 </td><td>
  <input type="radio" name="per_citizen" <?php if (isset($per_citizen) && $per_citizen == "Yes") echo "checked";?> value="Yes" checked="checked">Yes
  <input type="radio" name="per_citizen" <?php if (isset($per_citizen) && $per_citizen == "No") echo "checked";?> value="No">No 
 </td></tr>
 </table>
 
 <table>
 <tr><td>
 <br>
 <strong>If the answer is no, only take down personal contact details, the loan institution will contact them and asses their eligibility.
  </td></tr>
  </table>
  
  <br>
  <table>
 <tr><td style="width: 250px; !important">
 <strong>First Name:</strong>
 </td><td>
 <input type="text" name="per_firstname" value="<?php echo $per_firstname; ?>" />
 </td></tr>
 
  <tr><td>
 <strong>Last Name:</strong>
 </td><td>
 <input type="text" name="per_lastname" value="<?php echo $per_lastname; ?>" />
 </td></tr>
 
 <tr><td>
 <strong>ID Number:</strong>
 </td><td>
 <input type="text" name="per_id" size="13" maxlength="13" value="<?php echo $per_id; ?>" /> <strong> 13 Digits </strong>
 </td></tr>
</table>

<br>
 
 <table width="100%">
  <tbody>
    <tr>
      <td style="width: 250px; !important"><strong>Maritial Status:</strong></td>

      <td>
	  	  <input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "COP") echo "checked";?>" value="COP">COP

	  <input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "ANC") echo "checked";?>" value="ANC">ANC

	  <input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "Single") echo "checked";?>" value="Single" checked="checked">Single 
<br>
	    <input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "Seperated") echo "checked";?>" value="Seperated">Seperated

	  <input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "Widdowed") echo "checked";?>" value="Widdowed">Widdowed

	<input type="radio" name="per_martype" <?php if (isset($per_martype) && $per_martype == "Divorced") echo "checked";?>" value="Divorced">Divorced
	  </td>
    </tr>
  </tbody>
</table>
 <br>
 <table>
 <tr><td style="width: 250px; !important">
 <strong>Residential Address: <br>(No Commas Please, use . )</strong>
 </td><td>
 <input type="text" name="per_addr" size="50" value="<?php echo $per_addr; ?>" />
 </td></tr>
 
    <tr><td>
 <strong>Post Code:</strong>
 </td><td>
 <input type="text" name="per_pcode" value="<?php echo $per_pcode; ?>" />
 </td></tr>
 
    <tr><td>
 <strong>Home No.:</strong>
 </td><td>
 <input type="text" name="per_homeno" value="<?php echo $per_homeno; ?>" />
 </td></tr>
 
    <tr><td>
	<strong>Work No:</strong>
 </td><td>
 <input type="text" name="per_workno" value="<?php echo $per_workno; ?>" />
 </td></tr>
 
    <tr><td>
 <strong>Cell No:</strong>
 </td><td>
 <input type="text" name="per_cellno" value="<?php echo $per_cellno; ?>" />
 </td></tr>
 
    <tr><td>
 <strong>Email Address:</strong>
 </td><td>
 <input type="text" name="per_email" size="50" value="<?php echo $per_email; ?>" />
 </td></tr>
 
  <tr><td>
 <strong>Bond / Rent: </strong>
 </td><td>
 <input type="radio" name="per_bondrent" <?php if (isset($per_bondrent) && $per_bondrent=="Bond") echo "checked";?> value="Bond">Bond
 <input type="radio" name="per_bondrent" <?php if (isset($per_bondrent) && $per_bondrent =="Rent") echo "checked";?> value="Rent" checked="checked">Rent 
 </td></tr>
 
     <tr><td>
 <strong>How Many Years at Property:</strong>
 </td><td>
 <input type="text" name="per_yearsprop" size="5px" alue="<?php echo $per_yearsprop; ?>" />&nbsp;<strong>Years</strong>
 </td></tr>
 
     <tr><td>
 <strong>Debt Review:</strong>
 </td><td>
  <input type="radio" name="per_debtreview" <?php if (isset($per_debtreview) && $per_debtreview == "Yes") echo "checked";?> value="Yes">Yes
 <input type="radio" name="per_debtreview" <?php if (isset($per_debtreview) && $per_debtreview == "No") echo "checked";?> value="No" checked="checked">No 
 </td></tr>
 
     <tr><td>
 <strong>Personal or Consolidation Loan:</strong>
 </td><td>
 <input type="text" name="per_loan" value="<?php echo $per_loan; ?>" />
 </td></tr>

     <tr><td>
 <strong>Loan Ammount:</strong>
 </td><td>
R &nbsp; <input type="text" name="per_loanamm" size="10px" value="<?php echo $per_loanamm; ?>" />
 </td></tr>

 
      <tr><td>
 <strong>If personal - what is loan for?:</strong>
 </td><td>
 <input type="text" name="per_loanreason" value="<?php echo $per_loanreason; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Is the client over 21 Years old?: :</strong>
 </td><td>
  <input type="radio" name="age" <?php if (isset($age) && $age == "Yes") echo "checked";?> value="Yes" checked="checked">Yes
  <input type="radio" name="age" <?php if (isset($age) && $age == "No") echo "checked";?> value="No">No
 </td></tr>
 

 
 </table>
 
<div id="header-middle">
 <h2> Employment Details:</h2>
</div>
 
 <table>
  
 <tr><td style="width: 240px; !important">
 <strong>Company Name:</strong>
 </td><td>
 <input type="text" name="emp_compname" value="<?php echo $emp_compname; ?>" />
 </td></tr>

  <tr><td>
 <strong>Company Address: <br>(No Commas Please, use / )</strong>
 </td><td>
 <input type="text" name="emp_compaddr" size="50" value="<?php echo $emp_compaddr; ?>" />
 </td></tr>
 
  <tr><td>
 <strong>Period employed:</strong>
 </td><td>
 <input type="text" name="emp_peremp" size="5px" value="<?php echo $emp_peremp; ?>" />&nbsp;<strong>Years</strong>
 </td></tr>
 
  <tr><td>
 <strong>Job Title:</strong>
 </td><td>
 <input type="text" name="emp_job"  value="<?php echo $emp_job; ?>" />
 </td></tr>
 
  <tr><td>
 <strong>Gross Income:</strong>
 </td><td>
<strong>R &nbsp; </strong> <input type="text" name="emp_grossinc" size="10px" value="<?php echo $emp_grossinc; ?>" />
 </td></tr>
 
  <tr><td>
 <strong>Nett Income:</strong>
 </td><td>
 <strong>R &nbsp; </strong> <input type="text" name="emp_nettinc" size="10px" value="<?php echo $emp_nettinc; ?>" />
 </td></tr>
 
 <tr><td>
 <strong>Pay Date: </strong>
 </td><td>
 <input type="date" name="emp_paydate" value="<?php echo $emp_paydate; ?>" /> 
<i>NB!!! Format: YYYY-MM-DD (2016-08-24)</i><br> 
</td></tr>
  
</table>

<div id="header-middle">
 <h2>Relative not living with you:</h2>
</div>

 <table>
   <tr><td style="width: 240px; !important">
 <strong>Name:</strong>
 </td><td>
 <input type="text" name="rel_name" value="<?php echo $rel_name; ?>" />
 </td></tr>
 
   <tr><td>
 <strong>Surname:</strong>
 </td><td>
 <input type="text" name="rel_surn" value="<?php echo $rel_surn; ?>" />
 </td></tr>
 
   <tr><td>
 <strong>Contact No:</strong>
 </td><td>
 <input type="text" name="rel_cont" value="<?php echo $rel_cont; ?>" />
 </td></tr>
  
</table>

<div id="header-middle">
 <h2>Banking Details:</u></strong></h2>
</div>

 <table>
 <tr><td style="width: 240px; !important"><strong>Bank: </strong></td>
 <td>
  <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "FNB") echo "checked";?> value="FNB">First National Bank
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "absa_bank") echo "checked";?> value="absa_bank">Absa Bank
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "standard_bank") echo "checked";?> value="standard_bank">Standard Bank
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "nedbank") echo "checked";?> value="nedbank">Nedbank
  <br/>
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "capitec_bank") echo "checked";?> value="capitec_bank">Capitec Bank
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "nedbank") echo "checked";?> value="nedbank">Nedbank
  <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "African_Bank") echo "checked";?> value="African_Bank">African Bank
   <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "Bidvest") echo "checked";?> value="Bidvest">Bidvest
     <br/>
    <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "Investec") echo "checked";?> value="Investec">Investec
	 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "Postbank") echo "checked";?> value="Postbank">Postbank
	  <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "Meeg_Bank") echo "checked";?> value="Meeg_Bank">Meeg Bank
 <input type="radio" name="bank_name" <?php if (isset($bank_name) && $bank_name == "Awaiting_Bank_Details") echo "checked";?> value="Awaiting_Bank_Details">Awaiting Bank Details
 </td>
 </table>
 <br>

 <table>
 <tr><td style="width: 240px; !important">
 <strong>Account no.:</strong>
 </td><td>
 <input type="text" name="bank_acc" value="<?php echo $bank_acc; ?>" />
 </td></tr>
 
<tr><td>
<strong>Branch code:</strong>
</td><td>
<input type="text" name="bank_br" value="<?php echo $bank_br; ?>" />
</td></tr>
 
 <tr><td>
 <strong>Account Type: </strong>
 </td><td>
 <input type="radio" name="bank_type" <?php if (isset($bank_type) && $bank_type == "Cheque") echo "checked";?> value="Cheque">Cheque
 <input type="radio" name="bank_type" <?php if (isset($bank_type) && $bank_type == "Savings_Account") echo "checked";?> value="Savings_Account">Savings Account
 </td></tr>
  
 </table>
 
 <div id="header-middle">
 <h2>Existing Finance:</h2>
 </div>
  
  <table>
      <tr><td style="width: 240px; !important">
 <strong>Vehicle:</strong>
 </td><td>
 R &nbsp; <input type="text" name="fin_veh" size="10px" value="<?php echo $fin_veh; ?>" />
 </td></tr>
 
     <tr><td>
 <strong>Overdraft:</strong>
 </td><td>
 R &nbsp; <input type="text" name="fin_overd" size="10px" value="<?php echo $fin_overd; ?>" />
 </td></tr>
 
     <tr><td>
 <strong>Clothing Accounts:</strong>
 </td><td>
R &nbsp;  <input type="text" name="fin_cloth" size="10px" value="<?php echo $fin_cloth; ?>" />
 </td></tr>
 
     <tr><td>
 <strong>Credit Cards:</strong>
 </td><td>
 R &nbsp; <input type="text" name="fin_ccards" size="10px" value="<?php echo $fin_ccards; ?>" />
 </td></tr>
 
     <tr><td>
 <strong>Personal Loans:</strong>
 </td><td>
 R &nbsp; <input type="text" name="fin_ploans" size="10px" value="<?php echo $fin_ploans; ?>" />
 </td></tr>
  
 </table>
 
 <div id="header-middle">
 <h2>Expenses:</h2>
</div>

<table>  
     <tr><td style="width: 240px; !important">
 <strong>Bond/Rent:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_bondrent" size="10px" value="<?php echo $exp_bondrent; ?>" />
 </td></tr>
 
      <tr><td>
 <strong>Rates, Water, Electricity:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_rates" size="10px" value="<?php echo $exp_rates; ?>" />
 </td></tr>
  
       <tr><td>
 <strong>Vehicle installments:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_vehc" size="10px" value="<?php echo $exp_vehc; ?>" />
 </td></tr> 
 
       <tr><td>
 <strong>Personal loans:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_ploans" size="10px" value="<?php echo $exp_ploans; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Credit cards:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_ccards" size="10px" value="<?php echo $exp_ccards; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Furniture Accounts:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_furn" size="10px" value="<?php echo $exp_furn; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Clothing accounts:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_cloth" size="10px" value="<?php echo $exp_cloth; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Cell phone Accounts:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_cell"  size="10px" value="<?php echo $exp_cell; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Overdraft:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_overd" size="10px" value="<?php echo $exp_overd; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Policy / Insurance:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_policy" size="10px" value="<?php echo $exp_policy; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Transport:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_trans" size="10px" value="<?php echo $exp_trans; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Food/ Entertainment:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_food" size="10px" value="<?php echo $exp_food; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Household Maintenance:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_house" size="10px" value="<?php echo $exp_house; ?>" />
 </td></tr>
 
       <tr><td>
 <strong>Education cost:</strong>
 </td><td>
  R &nbsp; <input type="text" name="exp_educ" size="10px" value="<?php echo $exp_educ; ?>" />
 </td></tr>
 
 </table>
 
<input type="submit" value=" Submit " name="submit"/><br />

</form>
</div>

<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "agentform";
$password = "Asime@2016";
$dbname = "debtdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO daily (agentname, comments, per_firstname, per_lastname, per_id, per_martype, per_addr, per_pcode, per_homeno, per_workno, per_cellno, per_email, per_bondrent, per_yearsprop, per_debtreview, per_loan, per_loanamm, per_loanreason, per_age, per_citizen, emp_compname, emp_compaddr, emp_peremp, emp_job, emp_grossinc, emp_nettinc, emp_paydate, emp_travelallow, emp_petrallow, emp_overtime, emp_comm, rel_name, rel_surn, rel_cont, bank_name, bank_acc, bank_br, bank_type, fin_veh, fin_overd, fin_cloth, fin_ccards, fin_ploans, exp_bondrent, exp_rates, exp_vehc, exp_ploans, exp_ccards, exp_furn, exp_cloth, exp_cell, exp_overd, exp_policy, exp_trans, exp_food, exp_house, exp_educ)
VALUES ('".$_POST["agentname"]."','".$_POST["comments"]."','".$_POST["per_firstname"]."','".$_POST["per_lastname"]."','".$_POST["per_id"]."','".$_POST["per_martype"]."','".$_POST["per_addr"]."','".$_POST["per_pcode"]."','".$_POST["per_homeno"]."','".$_POST["per_workno"]."','".$_POST["per_cellno"]."','".$_POST["per_email"]."','".$_POST["per_bondrent"]."','".$_POST["per_yearsprop"]."','".$_POST["per_debtreview"]."','".$_POST["per_loan"]."','".$_POST["per_loanamm"]."','".$_POST["per_loanreason"]."','".$_POST["per_age"]."','".$_POST["per_citizen"]."','".$_POST["emp_compname"]."','".$_POST["emp_compaddr"]."','".$_POST["emp_peremp"]."','".$_POST["emp_job"]."','".$_POST["emp_grossinc"]."','".$_POST["emp_nettinc"]."','".$_POST["emp_paydate"]."','".$_POST["emp_travelallow"]."','".$_POST["emp_petrallow"]."','".$_POST["emp_overtime"]."','".$_POST["emp_comm"]."','".$_POST["rel_name"]."','".$_POST["rel_surn"]."','".$_POST["rel_cont"]."','".$_POST["bank_name"]."','".$_POST["bank_acc"]."','".$_POST["bank_br"]."','".$_POST["bank_type"]."','".$_POST["fin_veh"]."','".$_POST["fin_overd"]."','".$_POST["fin_cloth"]."','".$_POST["fin_ccards"]."','".$_POST["fin_ploans"]."','".$_POST["exp_bondrent"]."','".$_POST["exp_rates"]."','".$_POST["exp_vehc"]."','".$_POST["exp_ploans"]."','".$_POST["exp_ccards"]."','".$_POST["exp_furn"]."','".$_POST["exp_cloth"]."','".$_POST["exp_cell"]."','".$_POST["exp_overd"]."','".$_POST["exp_policy"]."','".$_POST["exp_trans"]."','".$_POST["exp_food"]."','".$_POST["exp_house"]."','".$_POST["exp_educ"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>
