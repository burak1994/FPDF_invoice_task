<?php 
require('fpdf/fpdf.php');

class PDF extends FPDF
{

	//[ Başlık ]
	function Header()
	{
		$date = date('d/m/Y');
		$this->Setfont('courier','B',20);
		$this->Image('logo.png',5,5,50);
		$this->Cell(150);
		$this->Cell(30,10,'FATURA TASLAK',0,1,'C');
		$this->Setfont('courier','',15);
		$this->Cell(140);
		$this->Cell(30,10,'SIRA NO : 1',0,1,'C');
		$this->Cell(147);
		$this->Cell(30,10,'SERI NO : ABC123',0,1,'C');
		$this->Cell(30,10,'SAYIN',0,0,'C');
		$this->Cell(120);
		$this->Cell(30,10,'TARIH : '.$date,0,1,'C');
		$this->Cell(20);
		$this->Cell(30,10,'RADMED LTD. STI.',0,1,'C');
        $this->Ln(10);


	}
	//[ Başlık  Bitiş]

   //[ Tablo Üst Bilgi]
   function HeaderTable()
   {
   	$this->Setfont('courier','B',16);
   	$this->Cell(20,6,'#',1,0,'C');
   	$this->Cell(70,6,'MALZEME',1,0,'C');
   	$this->Cell(50,6,'MIKTAR',1,0,'C');
   	$this->Cell(50,6,'FIYAT',1,1,'C');
   }

   //[ Tablo Üst Bilgi Bitiş]
    
   //[ Tablo  Bilgi ]
   function MainTable()
   {
   	$this->Setfont('courier','i',13);
  for ($i=1; $i <10 ; $i++) { 
  	
   	$this->Cell(20,6,$i,1,0,'C');
   	$this->Cell(70,6,$i.'2323 KODU',1,0,'C');
   	$this->Cell(50,6,$i+232,1,0,'C');
   	$this->Cell(50,6,$i+23241,1,1,'C');
  }
   }
   //[ Tablo  Bilgi  Bitiş]

   //[ Tablo Alt Bilgi]
   function FooterTable()
   {
   	$this->Setfont('courier','B',16);
   	$this->Cell(20,6,'',1,0,'C');
   	$this->Cell(70,6,'',1,0,'C');
   	$this->Cell(50,6,'',1,0,'C');
   	$this->Cell(50,6,'28932',1,1,'C');
   }

   //[ Tablo Alt Bilgi Bitiş]


	//[Alt Başlık]
	function Footer()
	{
		$this->SetY(-15);
		$this->Setfont('courier','i',20);
		$this->Cell(200,10,'FATURASIZ ISLEM YAPILMAYACAKTIR',0,0,'C');

	}
	//[Alt Başlık Bitiş]
}


$pdf = new PDF();
$pdf->AddPage('P','A4');
$pdf->HeaderTable();
$pdf->MainTable();
$pdf->FooterTable();
$pdf->Output();



 ?>