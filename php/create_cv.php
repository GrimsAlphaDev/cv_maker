<?php
require('../assets/fpdf/fpdf.php');

if (!isset($_POST)) {
    header('Location: ../index.php');
    die;
}

class PDF extends FPDF
{
    // ... definisi lainnya ...

    function FancyTextWithLine($text)
    {
        $this->SetFont('Arial', 'B', 10);

        // Calculate line length based on page width
        // $lineLength = $this->GetPageWidth() - $this->lMargin - $this->rMargin;

        // Output text
        $this->Cell(0, 5, $text, 0, 1, 'L');

        // Calculate line width based on the page width
        $lineWidth = $this->GetPageWidth() - $this->lMargin - $this->rMargin;

        // Calculate line position with a small space underneath
        $lineY = $this->GetY() + 3;

        // Draw line under text
        $this->Line($this->lMargin, $lineY, $this->lMargin + $lineWidth, $lineY);

        // Move to next line
        $this->Ln();
    }
}

// var_dump($_POST);
// die;

// create pdf
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);
// make a title for cv without border
$pdf->Cell(0, 10, $_POST['nama'], 0, 1, 'C');
$pdf->SetFont('Arial', '', 6);
// sub Judul
$pdf->Cell(0, 1, $_POST['email'] .  " | " . $_POST['noHp'] . " | " . $_POST['kota'] . ", " . $_POST['negara'], 0, 1, 'C');
$pdf->Cell(0, 3, '', 0, 1, 'L');
// Deskripsi Diri
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(0, 4, $_POST['deskripsiDiri'], 0, 'J');
$pdf->Cell(0, 3, '', 0, 1, 'L');

$pdf->FancyTextWithLine("Pengalaman Kerja");

foreach ($_POST['posisi'] as $key => $posisi) {
    // Isi Pengalaman Kerja
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(0, 7, $posisi . ', ' . $_POST['namaPerusahaan'][$key], 0, 1, 'L');

    // convert $_POST['dari'][$key] to readable with month name and year
    $dari = date("F Y", strtotime($_POST['dari'][$key]));
    $sampai = date("F Y", strtotime($_POST['sampai'][$key]));


    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(0, 5, $dari .  ' - ' . $sampai, 0, 1, '');
    // loop jobdesk
    foreach ($_POST['jobdesk'] as $jobdesk) {
        $pdf->MultiCell(0, 5, '- ' . $jobdesk, 0, 'J');
    }

    $pdf->Cell(0, 3, '', 0, 1, 'L');

    // create ul list
    // $pdf->SetFont('Arial', '', 8);
    // $pdf->Cell(0, 5, $dari .  ' - ' . $sampai, 0, 1, '');
    // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');

    // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    // $pdf->Cell(0,3,'',0,1,'L');
}

if(isset($_POST['posisi2'])){
        // Isi Pengalaman Kerja
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(0, 7, $_POST['posisi2'] . ', ' . $_POST['namaPerusahaan2'], 0, 1, 'L');
    
        // convert $_POST['dari'] to readable with month name and year
        $dari = date("F Y", strtotime($_POST['dari2']));
        $sampai = date("F Y", strtotime($_POST['sampai2']));
    
    
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(0, 5, $dari .  ' - ' . $sampai, 0, 1, '');
        // loop jobdesk
        foreach ($_POST['jobdesk2'] as $jobdesk) {
            $pdf->MultiCell(0, 5, '- ' . $jobdesk, 0, 'J');
        }
    
        $pdf->Cell(0, 3, '', 0, 1, 'L');
    
        // create ul list
        // $pdf->SetFont('Arial', '', 8);
        // $pdf->Cell(0, 5, $dari .  ' - ' . $sampai, 0, 1, '');
        // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    
        // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
        // $pdf->Cell(0,3,'',0,1,'L');
}


// $pdf->SetFont('Arial','B',8);
// $pdf->Cell(0,7,'Admin, Perusahaan ABC',0,1,'L');

// create ul list
// $pdf->SetFont('Arial','',8);
// $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
// $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
// $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');

// Pendidikan
$pdf->FancyTextWithLine("Pendidikan");

foreach ($_POST['namaSekolah'] as $key => $sekolah) {

    // convert $_POST['dariSekolah'][$key] to readable with month name and year
    $dariSekolah = date("F Y", strtotime($_POST['dariSekolah'][$key]));
    $sampaiSekolah = date("F Y", strtotime($_POST['sampaiSekolah'][$key]));

    $pdf->Cell(0, 3, '', 0, 1, 'L');
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(0, 5, $sekolah, 0, 1, '');
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(0, 5, $dariSekolah . ' - ' . $sampaiSekolah, 0, 1, '');

    // foreach($_POST['jurusan'] as $key2 => $jurusan){
        $pdf->Cell(0, 5, $_POST['jurusan'][$key], 0, 1, '');
    // }

}

// isi pendidikan
// $pdf->Cell(0, 3, '', 0, 1, 'L');
// $pdf->SetFont('Arial', 'B', 8);
// $pdf->Cell(0, 5, 'SMA ASK', 0, 1, '');
// $pdf->SetFont('Arial', '', 8);
// $pdf->Cell(0, 5, 'September 2023 - Sekarang', 0, 1, '');
// $pdf->Cell(0, 5, 'Jurusan Bla Bla', 0, 1, '');

// $pdf->Cell(0, 3, '', 0, 1, 'L');
// $pdf->SetFont('Arial', 'B', 8);
// $pdf->Cell(0, 5, 'SMP', 0, 1, '');
// $pdf->SetFont('Arial', '', 8);
// $pdf->Cell(0, 5, 'September 2023 - Sekarang', 0, 1, '');
// $pdf->Cell(0, 5, 'Jurusan Bla Bla', 0, 1, '');

// $pdf->Cell(0, 3, '', 0, 1, 'L');
// $pdf->SetFont('Arial', 'B', 8);
// $pdf->Cell(0, 5, 'SD', 0, 1, '');
// $pdf->SetFont('Arial', '', 8);
// $pdf->Cell(0, 5, 'September 2023 - Sekarang', 0, 1, '');
// $pdf->Cell(0, 5, 'Jurusan Bla Bla', 0, 1, '');


$pdf->Cell(0, 3, '', 0, 1, 'L');
// Pengalaman Organisasi
$pdf->FancyTextWithLine("Pengalaman Organisasi");

foreach($_POST['jabatan'] as $key => $jabatan){

    // convert $_POST['dariOrganisasi'][$key] to readable with month name and year
    $dariOrganisasi = date("F Y", strtotime($_POST['dariOrganisasi'][$key]));
    $sampaiOrganisasi = date("F Y", strtotime($_POST['sampaiOrganisasi'][$key]));

    // Isi Pengalaman Organissi
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(0, 7, $jabatan . ', ' . $_POST['organisasi'][$key], 0, 1, 'L');
    // create ul list
    $pdf->SetFont('Arial', '', 8);
    $pdf->Cell(0, 5, $dariOrganisasi . ' - ' . $sampaiOrganisasi, 0, 1, '');

    foreach($_POST['jobdeskOrganisasi'] as $jobdeskOrganisasi){
        $pdf->MultiCell(0, 5, '- ' . $jobdeskOrganisasi, 0, 'J');
    }

    // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->Cell(0, 3, '', 0, 1, 'L');
}

if(isset($_POST['jabatan2'])){
    foreach($_POST['jabatan2'] as $key => $jabatan){

        // convert $_POST['dariOrganisasi'][$key] to readable with month name and year
        $dariOrganisasi = date("F Y", strtotime($_POST['dariOrganisasi2'][$key]));
        $sampaiOrganisasi = date("F Y", strtotime($_POST['sampaiOrganisasi2'][$key]));
    
        // Isi Pengalaman Organissi
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(0, 7, $jabatan . ', ' . $_POST['organisasi2'][$key], 0, 1, 'L');
        // create ul list
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(0, 5, $dariOrganisasi . ' - ' . $sampaiOrganisasi, 0, 1, '');
    
        foreach($_POST['jobdeskOrganisasi2'] as $jobdeskOrganisasi){
            $pdf->MultiCell(0, 5, '- ' . $jobdeskOrganisasi, 0, 'J');
        }
    
        // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
        // $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
        $pdf->Cell(0, 3, '', 0, 1, 'L');
    }
}

// $pdf->SetFont('Arial', 'B', 8);
// $pdf->Cell(0, 7, 'Ketua, UKM', 0, 1, 'L');
// create ul list
// $pdf->SetFont('Arial', '', 8);
// $pdf->Cell(0, 5, 'September 2023 - Sekarang', 0, 1, '');
// $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
// $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');

// outuput the pdf
$pdf->Output();
