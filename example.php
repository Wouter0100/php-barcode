<?php
$encoding = (isset($_GET['encoding'])) ? $_GET['encoding'] : 'EAN-13';
$number   = (isset($_GET['code']))     ? $_GET['code']     : null;
$scale    = (isset($_GET['scale']))    ? $_GET['scale']    : null;

new Barcode($encoding, $number, $scale);