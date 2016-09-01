<?php
//============================================================+
// File name   : example_061.php
// Begin       : 2010-05-24
// Last Update : 2014-01-25
//
// Description : Example 061 for TCPDF class
//               XHTML + CSS
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: XHTML + CSS
 * @author Nicola Asuni
 * @since 2010-05-25
 */

// Include the main TCPDF library (search for installation path).
require_once('examples\tcpdf_include.php');
include('tcpdf.php');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Asimegroup');
$pdf->SetTitle('Asime Loan App');
$pdf->SetSubject('Asime Loan Application Form');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins('5', '0', '0');


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, '0');

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'examples\lang\eng.php')) {
	require_once(dirname(__FILE__).'examples\lang\eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

/* NOTE:
 * *********************************************************
 * You can load external XHTML using :
 *
 * $html = file_get_contents('/path/to/your/file.html');
 *
 * External CSS files will be automatically loaded.
 * Sometimes you need to fix the path of the external CSS.
 * *********************************************************
 */

// define some HTML content with style


$html = '<style>

table{
  border-collapse: collapse;
}
th.title{
  text-align: center;
  border: 1px solid black;
}
td.heading {
  font-weight: bold;
  font-size: 18px;
  height: 30px;
  border: none;
}
td.heading-mid {
  font-weight: bold;
  font-size: 18px;
  border: none;
}
td.subheading {
  font-weight: bold;
  font-size: 15px;
  border: 1px solid black;
}
td.data {
  font-size: 15px;
  border: 1px solid black;
}
td.spacer{
  width:5px;
}
tr.spacer{
  height:10px;
}
</style>

<body>
<br/>
<table>
  <tr>
    <td height="40px"></td>
  </tr>
  <tr>
    <td align="right" class="heading"  width="175px">Personal</td>
    <td align="left" class="heading" width="210px">Details:</td>
    <td width="10px"></td>
    <td align="right" class="heading" width="150px">Relative not</td>
    <td align="left" class="heading" width="170px">living with you:</td>
    <td width="10px"></td>
    <td align="right" class="heading" width="185px">Expenses:</td>
    <td width="100px"></td>
  </tr>
  <tr>
    <td class="subheading">SA Citizen?:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Name:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Bond / Rent:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Name:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Surname:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Rates, Water, Electricity:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Last Name:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Contact No:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Vehicle installments:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">ID Number:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="subheading">Personal loans</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Maritial Status:</td>
    <td class="data"></td>
    <td></td>
    <td align="right" class="heading-mid">Banking</td>
    <td align="left" class="heading-mid">Details:</td>
      <td></td>
    <td class="subheading">Credit cards:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Residential Address 1:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Bank Name:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Furniture Accounts:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Residential Address 2:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Account no.:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Clothing accounts:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Post Code:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Account Type:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Cell phone Accounts:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Home No:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Branch code:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Overdraft:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Work No:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="subheading">Policy / Insurance:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Cell No:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="subheading">Transport:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Email Address:</td>
    <td class="data"></td>
    <td></td>
    <td align="right" class="heading-mid">Existing</td>
    <td align="left" class="heading-mid">Finance:</td>
      <td></td>
    <td class="subheading">Food/ Entertainment:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Bond / Rent:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Vehicle:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Household Maintenance:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Years at property?:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Overdraft:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Education cost:</td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Debt Review?:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Clothing Accounts:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading"></td>
    <td class="data"></td>
  </tr>
  <tr>
    <td class="subheading">Kind of Loan:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Credit Cards:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Loan Reason:</td>
    <td class="data"></td>
    <td></td>
    <td class="subheading">Personal Loans:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Over 21 Years old?</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="spacer">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td align="right" class="heading">Employment</td>
    <td align="left" class="heading">Details:</td>
      <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Company Name:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Company Address 1:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Company Address 2:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Period employed:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Job Title:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Gross Income:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Nett Income:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="subheading">Pay Date:</td>
    <td class="data"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

</table>';


// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_061.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+
