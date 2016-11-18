<?php
require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BB&O');
$pdf->SetTitle('abbeyhill_01MW');
$pdf->SetSubject('Course Rating');
$pdf->SetKeywords('Rating, abbeyhill');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	  require_once(dirname(__FILE__).'/lang/eng.php');
   $pdf->setLanguageArray($l);
   }
$pdf->SetFont('helvetica', '',  8);
// -------- New Page -------------
$pdf->AddPage('L');
// -------- Title Row -------------
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(49.2857, 4.30435, '<b>CLUB</b>: Abbey Hill Golf Centre', 1, 'J', true, 0,8, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(44.3571, 4.30435, '<b>COURSE</b>: Men White', 1, 'J', true, 0,57.2857, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(14.7857, 4.30435, '<b>HOLE</b>: 1', 1, 'J', true, 0,101.643, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(19.7143, 4.30435, '<b>PAR</b>: 4', 1, 'J', true, 0,116.429, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(29.5714, 4.30435, '<b>LENGTH</b>: 321', 1, 'J', true, 0,136.143, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(49.2857, 4.30435, '<b>DATE RATED</b>:', 1, 'J', true, 0,165.714, 4, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(69, 4.30435, '<b>T/LEADER</b>:', 1, 'J', true, 0,215, 4, false, 0, true, true, 0,'M',false);
// -------- Shots Played -------------
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255, 255, 255);
$pdf->MultiCell(29.5714, 4.30435, '<b>SHOTS PLAYED</b>', 1, 'J', true, 0,8, 8.30435, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center"><b>T</b></span>', 1, 'J', true, 0,37.5714, 8.30435, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center"><b>1</b></span>', 1, 'J', true, 0,49.8929, 8.30435, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center"><b>2</b></span>', 1, 'J', true, 0,62.2143, 8.30435, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center"><b>3</b></span>', 1, 'J', true, 0,74.5357, 8.30435, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(29.5714, 4.30435, '<span style="text-align:right"><i>Scratch</i></span>', 1, 'J', true, 0,8, 12.6087, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center">250</span>', 1, 'J', true, 0,37.5714, 12.6087, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center">71</span>', 1, 'J', true, 0,49.8929, 12.6087, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(127,127,127);
$pdf->MultiCell(12.3214, 4.30435, ' ', 1, 'J', true, 0,62.2143, 12.6087, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(127,127,127);
$pdf->MultiCell(12.3214, 4.30435, ' ', 1, 'J', true, 0,74.5357, 12.6087, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(29.5714, 4.30435, '<span style="text-align:right"><i>Bogey</i></span>', 1, 'J', true, 0,8, 16.913, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center">200</span>', 1, 'J', true, 0,37.5714, 16.913, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(12.3214, 4.30435, '<span style="text-align:center">121</span>', 1, 'J', true, 0,49.8929, 16.913, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(127,127,127);
$pdf->MultiCell(12.3214, 4.30435, ' ', 1, 'J', true, 0,62.2143, 16.913, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(127,127,127);
$pdf->MultiCell(12.3214, 4.30435, ' ', 1, 'J', true, 0,74.5357, 16.913, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(29.5714, 4.30435, '<span style="text-align:center">Transition Hole?</span>', 1, 'J', true, 0,8, 21.2174, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(24.6429, 4.30435, '<span style="text-align:center"><b>Scratch: </b>No</span>', 1, 'J', true, 0,37.5714, 21.2174, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(24.6429, 4.30435, '<span style="text-align:center"><b> Bogey: </b>No</span>', 1, 'J', true, 0,62.2143, 21.2174, false, 0, true, true, 0,'M',false);
// -------- Roll -------------
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255, 255, 255);
$pdf->MultiCell(29.5714, 4.30435, '<b>ROLL</b>', 1, 'J', true, 0,8, 25.5217, false, 0, true, true, 0,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(24.6429, 4.30435, '<span style="text-align:center"><b>S1</b></span>', 1, 'J', true, 0,37.5714, 25.5217, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(24.6429, 4.30435, '<span style="text-align:center"><b>S2</b></span>', 1, 'J', true, 0,62.2143, 25.5217, false, 0, true, true, 0,'M',false);
$pdf->MultiCell(29.5714, 4.30435, '<i>Downhill/Level/Uphill</i>', 1, 'J', true, 0,8, 29.8261, false, 0, true, true, 0,'M',false);
$pdf->Output('abbeyhill_01MW.pdf', 'I');
?>