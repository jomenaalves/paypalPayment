 /* 
    |------------------------------------------------------
    |                  EXAMPLE OF USE
    |------------------------------------------------------
  */

--------------------------------------------------------------------------

    // make a require of the class    
    require_once "vendor/autoload.php";
    
    // use that class
    use Source\PaypalPayment;
    
    // create a new instance 
    $gateway = new PaypalPayment;

    // set the instructions
    $gateway
        ->setKeys( <PAYPAL_CLIENT_ID>, <PAYPAL_SECRET> )
        ->setCurrency( <PAYPAL_CURRENCY> ) // example: BRL,USD
        ->setReturnUrl( <PAYPAL_RETURN_URL> ) // example: https://yourdomain.com/success
        ->setCancelUrl( <PAYPAL_CANCEL_URL> ) // example: https://yourdomain.com/success
        ->setGold(<PRICE_OF_PRODUCT>)
        ->isSandboxie(true) // set to false to go live
        ->setItems([
            'name' => 'Calsa moletom GG',
            'price' => '39.99',
            'description' => 'calsa moletom top de linha 100% algodão',
            'quantity' =>  '1'
        ]) // opcional
        ->execute(); // call the method execute