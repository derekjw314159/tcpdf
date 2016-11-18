<?php
require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BB&O');
$pdf->SetTitle('oaklandpark_17MR');
$pdf->SetSubject('Course Rating');
$pdf->SetKeywords('Rating, oaklandpark');
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
$pdf->MultiCell(49.2857,4.30435,'<b>CLUB</b>: Oakland Park Golf Course',1, 'J', true, 0,8,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(44.3571,4.30435,'<b>COURSE</b>: Men Red',1, 'J', true, 0,57.2857,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(14.7857,4.30435,'<b>HOLE</b>: 18',1, 'J', true, 0,101.643,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(19.7143,4.30435,'<b>PAR</b>: 4',1, 'J', true, 0,116.429,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(29.5714,4.30435,'<b>LENGTH</b>: 330',1, 'J', true, 0,136.143,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(49.2857,4.30435,'<b>DATE RATED</b>:',1, 'J', true, 0,165.714,4, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(69,4.30435,'<b>T/LEADER</b>:',1, 'J', true, 0,215,4, false, 0, true, true, 4.30435,'M',false);
// -------- Shots Played -------------
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255, 255, 255);
$pdf->MultiCell(29.5714,4.30435,'<b>SHOTS PLAYED</b>',1, 'J', true, 0,8,8.30435, false, 0, true, true, 4.30435,'M',false);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(29.5714,4.30435,'<span style="text-align:right"><i>Scratch</i></span>',1, 'J', true, 0,8,12.6087, false, 0, true, true, 4.30435,'M',false);
$pdf->MultiCell(29.5714,4.30435,'<span style="text-align:right"><i>Bogey</i></span>',1, 'J', true, 0,8,16.913, false, 0, true, true, 4.30435,'M',false);
$pdf->Output('oaklandpark_17MR.pdf', 'I');
?>