<?php
require_once 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;

$qrcode = new QRCode();

// Dados que você quer codificar
$data = '00020101021226820014br.gov.bcb.pix2560pix.stone.com.br/pix/v2/c309b65d-c12e-4ee2-9145-10f7732d561a52040000530398654040.015802BR5925Imaxis Administradora de 6014RIO DE JANEIRO62290525paclvlby3zfus761fk3d4cn6x6304EF1C';

$qrCodeImage = $qrcode->render($data);

echo '<img width="650" height="650" src="' . $qrCodeImage . '" />';
