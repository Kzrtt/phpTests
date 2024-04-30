<?php
require_once 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;

class QrCodeClass {
    public function generateQrCode($data) {
        $qrcode = new QRCode();
        $qrCodeImage = $qrcode->render($data);
        echo '<img width="650" height="650" src="' . $qrCodeImage . '" />';
    }
}

$qrCodeClass = new QrCodeClass();
$qrCodeClass->generateQrCode("00020101021226820014br.gov.bcb.pix2560pix.stone.com.br/pix/v2/820ded2a-1343-4589-99cd-c9b57201f22252040000530398654040.015802BR5925Imaxis Administradora de 6014RIO DE JANEIRO62290525paclvmpz6hx25cd1fk31cc68r6304CC06");


