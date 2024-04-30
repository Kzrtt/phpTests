<?php
require_once 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;

class QrCodeClass {
    public function generateQrCode($data) {
        $qrcode = new QRCode();
        $qrCodeImage = $qrcode->render($data);
        echo '<img width="350" height="350" src="' . $qrCodeImage . '" />';
    }
}


