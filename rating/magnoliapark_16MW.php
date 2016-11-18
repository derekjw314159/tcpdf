<?php
require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BB&O');
$pdf->SetTitle('magnoliapark_16MW');
$pdf->SetSubject('Course Rating');
$pdf->SetKeywords('Rating, magnoliapark');
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
$pdf->setFillColor(255, 255, 255);
$pdf->setTextColor(0, 0, 0);
$pdf->WriteHTMLCell(49.2857, 3.8125, 8, 4, '<b>CLUB</b>: Magnolia Park Golf & CC', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(44.3571, 3.8125, 57.2857, 4, '<b>COURSE</b>: Men White', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(14.7857, 3.8125, 101.643, 4, '<b>HOLE</b>: 16', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(19.7143, 3.8125, 116.429, 4, '<b>PAR</b>: 4', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(29.5714, 3.8125, 136.143, 4, '<b>LENGTH</b>: 443', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(49.2857, 3.8125, 165.714, 4, '<b>DATE RATED</b>:', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(69, 3.8125, 215, 4, '<b>T/LEADER</b>:', 1, 0, true, false, 'L', false);
// -------- Shots Played -------------

$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(0, 0, 0);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 7.8125, '<b>SHOTS PLAYED</b>', 1, 0, true, false, 'L', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(12.3214, 3.8125, 37.5714, 7.8125, '<b>T</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(12.3214, 3.8125, 49.8929, 7.8125, '<b>2</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(12.3214, 3.8125, 62.2143, 7.8125, '<b>3</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(12.3214, 3.8125, 74.5357, 7.8125, '<b>4</b>', 1, 0, true, false, 'C', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 11.625, '<i>Scratch</i>', 1, 0, true, false, 'R', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(12.3214, 3.8125, 37.5714, 11.625, '250 ', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(12.3214, 3.8125, 49.8929, 11.625, '193 ', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(12.3214, 3.8125, 62.2143, 11.625, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(12.3214, 3.8125, 74.5357, 11.625, '', 1, 0, true, false, 'L', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 15.4375, '<i>Bogey</i>', 1, 0, true, false, 'R', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(12.3214, 3.8125, 37.5714, 15.4375, '200 ', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(12.3214, 3.8125, 49.8929, 15.4375, '170 ', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(12.3214, 3.8125, 62.2143, 15.4375, '73 ', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(12.3214, 3.8125, 74.5357, 15.4375, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 19.25, 'Transition Hole?', 1, 0, true, false, 'R', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 19.25, '<b>Scratch: </b>No', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 19.25, '<b> Bogey: </b>No', 1, 0, true, false, 'C', false);
// -------- Roll -------------
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(0, 0, 0);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 23.0625, '<b>TEE ROLL</b>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 23.0625, '<b>S1</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 23.0625, '<b>B1</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 26.875, '<i>Slope in Tee Shot LZ</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(247, 253, 156);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 26.875, 'Level Minor', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(247, 253, 156);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 26.875, 'Level Minor', 1, 0, true, false, 'C', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 30.6875, '<i>Table Value</i>', 1, 0, true, false, 'R', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 30.6875, '+0', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 30.6875, '+0', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 34.5, '<b>E</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 34.5, '<i>Extreme</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 34.5, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 34.5, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 38.3125, '<b>2</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 38.3125, '<i>Twice</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 38.3125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 38.3125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 42.125, '<b>Roll Rating</b>', 1, 0, true, false, 'R', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(24.6429, 3.8125, 37.5714, 42.125, '<b>+0</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(24.6429, 3.8125, 62.2143, 42.125, '<b>+0</b>', 1, 0, true, false, 'C', false);
// -------- Fairway -------------
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(0, 0, 0);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(0, 0, 0);
$pdf->WriteHTMLCell(29.5714, 11.4375, 8, 87.875, '<b>FAIRWAY</b>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 87.875, '<b>S1</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 87.875, '<b>S2</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 87.875, '<b>B1</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 87.875, '<b>B2</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 87.875, '<b>B3</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 91.6875, '<i>Width (Yds) at LZ</i>', 1, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 95.5, 'Table Value', 1, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 91.6875, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 91.6875, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 91.6875, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 91.6875, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 91.6875, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 95.5, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 95.5, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 95.5, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 95.5, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 95.5, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 99.3125, '<b>L</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 99.3125, '<i>Lay-up</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 99.3125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 99.3125, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 99.3125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 99.3125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 99.3125, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 103.125, '<b>V</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 103.125, '<i>Visibility</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 103.125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 103.125, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 103.125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 103.125, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 103.125, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(8.87143, 3.8125, 28.7, 106.938, '<b>+W</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 106.938, '<i>Width</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 106.938, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 106.938, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 106.938, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 106.938, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 106.938, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(8.87143, 3.8125, 28.7, 110.75, '<b>-W</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 110.75, '<i>Width</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 110.75, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 110.75, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 110.75, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 110.75, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 110.75, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 114.562, '<b>O</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 114.562, '<i>Obtructed</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 114.562, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 114.562, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 114.562, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 114.562, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 114.562, '', 1, 0, true, false, 'L', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 118.375, 'Total Shot Value', 1, 0, true, false, 'R', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 37.5714, 118.375, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 47.4286, 118.375, '', 1, 0, true, false, 'L', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 57.2857, 118.375, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(9.85714, 3.8125, 67.1429, 118.375, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor(180, 180, 180);
$pdf->WriteHTMLCell(9.85714, 3.8125, 77, 118.375, '', 1, 0, true, false, 'L', false);

$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 122.188, 'Highest Shot Value', 1, 0, true, false, 'L', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(19.7143, 3.8125, 37.5714, 122.188, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor( 35,  83, 216);
$pdf->setFillColor(176, 224, 230);
$pdf->WriteHTMLCell(29.5714, 3.8125, 57.2857, 122.188, '+8', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 32.6429, 126, '<b>U</b>', 0, 0, true, false, 'R', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 126, '<i>Unpleasant</i>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(19.7143, 3.8125, 37.5714, 126, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 57.2857, 126, '', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(29.5714, 3.8125, 8, 129.812, '<b>Fairway Rating</b>', 1, 0, true, false, 'R', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(19.7143, 3.8125, 37.5714, 129.812, '<b>+8</b>', 1, 0, true, false, 'C', false);
$pdf->setTextColor(255, 255, 255);
$pdf->setFillColor( 35,  83, 216);
$pdf->WriteHTMLCell(29.5714, 3.8125, 57.2857, 129.812, '<b>+8</b>', 1, 0, true, false, 'C', false);
// -------- Recoverability and Rough -------------
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 86.8571, 7.8125, '<b>RECOV & ROUGH</b>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->WriteHTMLCell(12.3214, 3.8125, 86.8571, 34.5, '<i>Yd:</i>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(247, 253, 156);
$pdf->WriteHTMLCell(7.39286, 3.8125, 91.7857, 34.5, '0', 0, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->WriteHTMLCell(12.3214, 3.8125, 99.1786, 34.5, '<i>Ht:</i>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(247, 253, 156);
$pdf->WriteHTMLCell(7.39286, 3.8125, 104.107, 34.5, '2', 0, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFillColor(255, 255, 255);
$pdf->WriteHTMLCell(4.92857, 3.8125, 111.5, 34.5, '<b>C</b>', 1, 0, true, false, 'L', false);
// -------- Bunkers -------------
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 86.8571, 65, '<b>BUNKERS</b>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->WriteHTMLCell(29.5714, 3.8125, 116.429, 65, 'Green Protection:', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(247, 253, 156);
$pdf->WriteHTMLCell(39.4286, 3.8125, 146, 65, '1/4 - 1/2', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->WriteHTMLCell(29.5714, 3.8125, 86.8571, 68.8125, '', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 116.429, 68.8125, '<span style="text-align: center">S1</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 126.286, 68.8125, '<span style="text-align: center">S2</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 136.143, 68.8125, '<span style="text-align: center">S3</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 146, 68.8125, '<span style="text-align: center">B1</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 155.857, 68.8125, '<span style="text-align: center">B2</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 165.714, 68.8125, '<span style="text-align: center">B3</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(9.85714, 3.8125, 175.571, 68.8125, '<span style="text-align: center">B4</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(29.5714, 3.8125, 86.8571, 72.625, '<span style="text-align: right">Table Value</span>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(29.5714, 3.8125, 116.429, 72.625, '', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(39.4286, 3.8125, 146, 72.625, '', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(24.6429, 3.8125, 86.8571, 80.25, '<i>Carry</i>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(4.92857, 3.8125, 111.5, 80.25, '<b>C</b>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(69, 3.8125, 116.429, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(9.85714, 3.8125, 116.429, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(9.85714, 3.8125, 126.286, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(9.85714, 3.8125, 146, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(9.85714, 3.8125, 155.857, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFillColor(127, 127, 127);
$pdf->WriteHTMLCell(9.85714, 3.8125, 165.714, 80.25, '', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(255, 255, 255);
// -------- Altitude -------------
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(127, 127, 127);
$pdf->WriteHTMLCell(39.4286, 3.8125, 37.5714, 179.375, '<b>Altimeter Readings</b>', 1, 0, true, false, 'L', false);
$pdf->setTextColor(0, 0, 0);
$pdf->setFillColor(255, 255, 255);
$pdf->WriteHTMLCell(44.3571, 3.8125, 77, 179.375, '<b>On Tee:</b>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(44.3571, 3.8125, 121.357, 179.375, '<b>Scratch Approach:</b>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(44.3571, 3.8125, 165.714, 179.375, '<b>Bogey Approach:</b>', 1, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(44.3571, 3.8125, 209.086, 179.375, '<b>At Green:</b>', 1, 0, true, false, 'L', false);
$pdf->SetFillColor(247, 253, 156);
$pdf->WriteHTMLCell(12.8143, 3.8125, 106.571, 179.375, '0', 0, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(12.8143, 3.8125, 150.929, 179.375, '0', 0, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(12.8143, 3.8125, 195.286, 179.375, '0', 0, 0, true, false, 'L', false);
$pdf->WriteHTMLCell(12.8143, 3.8125, 239.643, 179.375, '0', 0, 0, true, false, 'L', false);
// -------- End of Page -------------
$pdf->Output('magnoliapark_16MW.pdf', 'I');
?>