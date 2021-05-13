<?php 
    define("PAYPAL_SECRET_LIVE", "EF35j6U5ZpgehFloezkZeFC_7xDlOB2uXJ2eaX4nmEYJCuRIUorVmwHdVrqX3pPpiduoxSq7Q0-BgmRv");
    define("PAYPAL_CLIENT_ID_LIVE", "AdjWomgp5QvrgUrIXvQ0gtbOldM76LaFx2qBwoLmNpk_Fm0PzMCNs_FYuAN4ZgyHOFDLA9O7Ygwmpfi7");

    define("PAYPAL_SECRET_SANDBOX", "EPy612_g0d_0G1NQmK7891i-3RWhLgU903PjRZGcuVb7NqFSKjDdje45PbJOrQRa4y-z7JnuL51TZYZZ");
    define("PAYPAL_CLIENT_ID_SANDBOX", "ATlYIITjzhbnFDuDccjIsdmJMvFI-y3tzSFePzQYH6_B8KMxEygjKhAF0EYqN9Jf86s2xIEwvDK14fmc");
    


    define('PAYPAL_RETURN_URL', 'http://localhost/paypal/success.php');
    define('PAYPAL_CANCEL_URL', 'http://localhost/paypal/form.php');
    define('PAYPAL_CURRENCY', 'BRL'); // set your currency here


    define("MANDATORY_PARAMETERS", "PAYPAL_CLIENT_ID, PAYPAL_SECRET, TESTMODE, CURRENCY, RETURN_URL, CANCEL_URL, GOLD");