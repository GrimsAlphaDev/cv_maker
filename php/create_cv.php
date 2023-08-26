<?php
require('../assets/fpdf/fpdf.php');

class PDF extends FPDF {
    // ... definisi lainnya ...
    
    function FancyTextWithLine($text) {
        $this->SetFont('Arial', 'B', 10);
        
        // Calculate line length based on page width
        $lineLength = $this->GetPageWidth() - $this->lMargin - $this->rMargin;

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
    // create pdf
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',18);
    // make a title for cv without border
    $pdf->Cell(0,10,'Julius Caesar Alexander',0,1,'C');
    $pdf->SetFont('Arial','',6);
    // sub Judul
    $pdf->Cell(0,5,'email@email.com | 08342394 | Jakarta, Indonesia',0,1,'C');
    // Deskripsi Diri
    $pdf->SetFont('Arial','',8);
    $pdf->MultiCell(0, 5, 'Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...', 0, 'J');
    $pdf->Cell(0,3,'',0,1,'L');

    $pengalamanKerta = "Pengalaman Kerja";
    $pdf->FancyTextWithLine($pengalamanKerta);
    
    // Isi Pengalaman Kerja
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,7,'Admin, Perusahaan ABC',0,1,'L');
    // create ul list
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->Cell(0,3,'',0,1,'L');

    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,7,'Admin, Perusahaan ABC',0,1,'L');
    // create ul list
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');

    $pdf->Cell(0,3,'',0,1,'L');
    // Pendidikan
    $pendidikan = "Pendidikan";
    $pdf->FancyTextWithLine($pendidikan);

    // isi pendidikan
    $pdf->Cell(0,3,'',0,1,'L');
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,5,'SMA ASK',0,1,'');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->Cell(0,5,'Jurusan Bla Bla',0,1,'');

    $pdf->Cell(0,3,'',0,1,'L');
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,5,'SMP',0,1,'');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->Cell(0,5,'Jurusan Bla Bla',0,1,'');

    $pdf->Cell(0,3,'',0,1,'L');
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,5,'SD',0,1,'');
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->Cell(0,5,'Jurusan Bla Bla',0,1,'');

    
    $pdf->Cell(0,3,'',0,1,'L');
    // Pengalaman Organisasi
    $pengalamanOrganisasi = "Pengalaman Organisasi";
    $pdf->FancyTextWithLine($pengalamanOrganisasi);

    // Isi Pengalaman Organissi
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,7,'Bandahara, HIMA',0,1,'L');
    // create ul list
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->Cell(0,3,'',0,1,'L');

    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,7,'Ketua, UKM',0,1,'L');
    // create ul list
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(0,5,'September 2023 - Sekarang',0,1,'');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    $pdf->MultiCell(0, 5, '- Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here...Your long text goes here....', 0, 'J');
    
    // outuput the pdf
    $pdf->Output();
