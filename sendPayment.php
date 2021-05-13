<?php


    require_once "vendor/autoload.php";

    use Source\PaypalPayment;
    
   $gateway = new PaypalPayment;

   $gateway
        ->setKeys(PAYPAL_CLIENT_ID_LIVE,PAYPAL_SECRET_LIVE)
        ->setCurrency(PAYPAL_CURRENCY)
        ->setReturnUrl(PAYPAL_RETURN_URL)
        ->setCancelUrl(PAYPAL_CANCEL_URL)
        ->setGold($_POST['amount'])
        ->isSandboxie(false)
        ->setItems([
            'name' => 'Calsa moletom GG',
            'price' => '39.99',
            'description' => 'calsa moletom top de linha 100% algodão',
            'quantity' =>  '1'
        ])
        ->execute();
