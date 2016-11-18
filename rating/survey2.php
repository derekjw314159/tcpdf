<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
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
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

// Table with rowspans and THEAD
$tbl = <<<EOD
<style>
td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 4px;
    }
th {
    padding-top:  6px;
    padding-bottom:  6px;
    background-color: #000080;
    border-bottom: 2px solid #000080;
    color: white;
    font-size: 120%;
    text-align: left;
}
    
</style>

<table style="border-collapse: collapse; border: 2px solid #000080; width:  100%;">
<thead>
	<TR VALIGN=TOP>
		<TH style="text-align: center; width: 4%;">No</th>
		<TH style="text-align: left; width: 14%:">Demog</th>
		<TH style="text-align: left; width: 80%;">Verbatim Response</th>
	</TR>
	</thead><tbody>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center; width: 4%;"><div class="keep_together">9</div></td>
		<td class="keep_together" style="text-align: left; width: 14%;"><div class="keep_together">F; 60-74; Full; C2</div></td>
		<td class="keep_together" style="text-align: left; width: 80%;"><div class="keep_together">As above</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">11</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">18</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No mate...!   </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">23</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 30-39; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No, well run club and enjoyable set up. The BD group are doing an excellent job</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">36</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 18-24; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Fantastic golf club. Very happy to be a member here. </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">38</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">no but I welcome this initiative which I consider very sensible and forward looking. I hope that it is rewarded with a good response.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">44</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Vet; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Thank goodness we have folk like you ensuring that the wonderful Denham Golf Club does not fall asleep on the job!  Please do fix stuff that is not broken!</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">50</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 40-49; Full; C5</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Really enjoying being a member.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">53</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Vet; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">None</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">59</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 40-49; Lim play; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">While I appreciate costs are rising, I feel the number of people able to play golf weekly is diminishing. I feel the club should aim to have more members who play less even though it may put pressure on weekend morning teetimes.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">67</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">73</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Intl; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">81</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C1</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Q2 Membership - I disapprove of removing entry fees. Make it easier for people to pay them; Q4 Mobile phones: Use as diary is fine' personal (not shared eg no looking at photos)) use with no sound is fine. </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">82</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">92</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I think that all players should show the pitch-mark repairers at the Pro-Shop before going out onto the course. I repair so many pitch-marks every round I play.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">95</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Vet; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I would welcome a club cleaner not only on the practise ground but by the tees on holes 1 and 10. The changing room door to open with the card. Regular replacement of door mats.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">96</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 75+; 5 day; C5</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Only 2 ladies on your panel why is that ?  </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">107</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 40-49; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Open the half way hut - it is a basic service to members availble at virtually every other club. Food service in the bar should be provided from morning and uninterrupted until late in the day. The chef need not be retained all day - bar staff can surely prepare a sandwich?</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">109</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">123</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 40-49; Full; C4</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Food in the dining room. Sometimes it seems there is too much choice for main courses for Sunday lunch and I worry that a lot is wasted. On the reverse, the tea offered to weekend ladies after matches is poor - usually it's just 1 cake, which I find a little embarrassing considering Denham's reputation for great food, and the fact that the teas at other clubs are a lot more generous. I don't mind paying more, and sometimes the other clubs even charge us as guests. But we are hungry when we come in, especially if it was an 11.30am start and we missed lunch.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">132</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 40-49; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">If you have a dress code, have it enforced. Loads of people breach the rules and no one says anything. Same with tee times.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">133</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 40-49; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I think it's great that you're asking these questions. Well done indeed.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">138</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; 5 day; C4</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">We have a wonderful group of members, an excellent club house, great food, a very nice course and superb staff. Please don't throw the baby out with the bathwater</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">139</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 40-49; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I would like to recognise Paul Mellet for his excellent management of events, Sunday lunch, wine list, etc.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">140</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">We can't have strawberries and cream in the bar or on the terrace in summer and more snacks in the bar.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">143</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 40-49; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">We need to be clear on 'purpose' and then align facilities, membership categories etc with that purpose. If we aspire to be a "Family Golf Club" then we've got to sort family golf facilities, have better family membership categories. </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">147</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">F; 50-59; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Re mobile phones - totally agree to usage, but they must be on silent.  Re. club emblem - agree to modernisation but would prefer usage to be discreet ie do not need to see the word Denham on clothing etc. as well. </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">149</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Full; C4</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">more mixed games with the ladies</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">150</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No. Very encouraged that the Board has instigated this survey, evidence that in future the Club really will be run for the benefit of the wider membership.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">154</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Living in London,travel is getting worse and drink/drive worrying.Do not expect much evening participation</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">157</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">The Board should be careful about increasing the number of members. We need sufficient to be financially viable and that appears to be the case at pesent. The number of new memebrs then needs to be sufficient to replace the number lost during a yaer. This also seems to be what is happening. I would deem taht to be very satisfactory. Even with current numbers congestion at peak times can be uncomfortable. Higher numbers of members will make the Club less attractive. . </div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">165</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C1</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I still believe that we have an excellent house team at DGC that is the envy of many clubs, all year round they provide exceptional service and food . The golf course whcih after all is the main reason people join has to be brought upto a similar all year round excellent standard.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">167</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I have been a member for about 5 years and I find the club a truly enjoyable place to play golf and attend social functions.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">169</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Retain the quality of member should remain our top priority.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">170</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Not at the moment</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">171</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Full; C4</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">177</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">I am very concerned re the new "wine"policy - I am not sure the members (incl me) understand the proposed changes - from "rumours" I think there may be a number (? many) members who would not support this - I think it mat jeopardise our society income if there was a change in the style of our beverage/wine choice/mangement !!</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">178</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 50-59; Full; C4</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">Well done for asking for the members views it already shows the club is changing and evolving</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">179</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">on technology, I wouldn't like to see widespread use of texting and googling. Maybe a separate area could be allocated</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">182</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">n/a</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">192</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 75+; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">No</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">199</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C2</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">n/a</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">203</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">This is a great initiative.</div></td>
	</tr>
	<TR VALIGN=TOP>
		<td class="keep_together" style="text-align: center;"><div class="keep_together">204</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">M; 60-74; Full; C3</div></td>
		<td class="keep_together" style="text-align: left;"><div class="keep_together">there's not much wrong with DGC, so any changes should be evolutionary "tweaks" in our view, with most focus on ensuring the finacial vaibility of the club. Being relatively new members, my wife and find it is more than living up to our expectations, both on and off the course.  </div></td>
	</tr>
</tbody></table>


EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
