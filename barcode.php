<?php
require_once 'EAN13.php';

class barcode {
    public $number;
    public $scale;

    protected $_encoder;

    function __construct($number = null, $scale = null) {
        $this->number = ($number == null) ? $this->_random() : $number;
        $this->scale = ($scale == null || $scale < 4) ? 4 : $scale;

        $this->_encoder = new EAN13($this->number, $this->scale);
    }

    function __destruct() {
        $this->_encoder->display();
    }

    private function _random() {
        return substr(number_format(time() * rand(), 0, '', ''), 0, 12);
    }
}
