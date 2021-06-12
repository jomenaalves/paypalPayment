<?php 
    define("PAYPAL_SECRET_LIVE", "");
    define("PAYPAL_CLIENT_ID_LIVE", "");

    define("PAYPAL_SECRET_SANDBOX", "");
    define("PAYPAL_CLIENT_ID_SANDBOX", "");
    


    define('PAYPAL_RETURN_URL', 'http://localhost/paypal/success.php');
    define('PAYPAL_CANCEL_URL', 'http://localhost/paypal/form.php');
    define('PAYPAL_CURRENCY', 'BRL'); // set your currency here


    define("MANDATORY_PARAMETERS", "PAYPAL_CLIENT_ID, PAYPAL_SECRET, TESTMODE, CURRENCY, RETURN_URL, CANCEL_URL, GOLD");
