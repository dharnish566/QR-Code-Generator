<?php

require 'vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

try {
    // Create a QR code
    $result = Builder::create()
        ->writer(new PngWriter())
        ->data('https://google.com') // Replace with your data
        ->size(300) // QR code size in pixels
        ->margin(10) // Margin around the QR code
        ->build();

    // Save the QR code as an image
    $result->saveToFile(__DIR__ . '/qrcode.png');

    // Output the QR code directly
    header('Content-Type: ' . $result->getMimeType());
    echo $result->getString();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}