<?php
//autoload
include("ean.php");

class Barcode
{
   public $number;
   public $encoding;
   public $scale;

   protected $_encoder;

   function __construct($encoding, $number=null, $scale=null)
   {
      $this->number = ($number==null) ? $this->_random() : $number;
      $this->scale = ($scale==null || $scale<4) ? 4 : $scale;

      // Reflection Class : Method

      $this->_encoder = new EAN13($this->number, $this->scale);
   }

   function __destruct()
   {
      $this->_encoder->display();
   }

   private function _random()
   {
     return substr(number_format(time() * rand(),0,'',''),0,12);
   }
}
