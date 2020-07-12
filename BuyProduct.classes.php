<?php

class Buyproduct extends Visa{
  public function getPayment(){    
    return $this->visaPayment();
  }
}

 ?>
