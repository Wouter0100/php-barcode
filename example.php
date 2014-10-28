<?php
require_once 'barcode.php';

$number   = (isset($_GET['code']))     ? $_GET['code']     : null;
$scale    = (isset($_GET['scale']))    ? $_GET['scale']    : null;

new barcode($number, $scale);