<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51HVD9GChkZzT1rTO87vO1sq8HbRnywFtTLLuH6QzCiaGY2mYC9V4htnlbJ1ekiQEUR8MWhddPXnRsAMR9ajukcg300RZmk8cGS";

$secretKey="sk_test_51HVD9GChkZzT1rTObtft33SPZki3F7UchTZ2kSUCFCR1QgJP1mduxPKLXDdhTrDl6nTIVTdDrYc4AQKV2hi0axpc00OgVb97c5";

\Stripe\Stripe::setApiKey($secretKey);
?>