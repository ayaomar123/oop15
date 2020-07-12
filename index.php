<?php
include_once "abstract/paymentTypes.abstract.php";
include_once "classes/BuyProduct.classes.php";


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

 ?>
