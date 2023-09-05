<?php

//  requiere la class Paypal
require_once('./Class/Paypal/Payment.php');
//  requiere la Class Stripe
require_once('./Class/Stripe/Payment.php');

require_once('./Class/Users/User.php');

// déclaration du use Paypal mais comme il y a 2 use Payment lui donner un alias as Paypalpayment
use \Class\Paypal\Payment as PaypalPayment;
use Class\Stripe\Payment;

// déclaration du use Class Stripe payment


// importer Use avec  la Class avec new  php namespace  resolver  crtl alt i

$paymentPaypal = new PaypalPayment();
$paymentStripe = new Payment();

var_dump($paymentPaypal, $paymentStripe);

