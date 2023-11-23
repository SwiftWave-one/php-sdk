# SwiftWave PHP SDK

## Overview

The SwiftWave PHP SDK enables seamless integration of SwiftWave's secure money transaction functionalities into PHP-based applications. This SDK simplifies transaction management, allowing you to send and receive payments, access currency exchange, and leverage SwiftWave's robust features within your PHP projects.

## Usage

### Payer

To fund payments using SwiftWave:

```php
// Payer Object
$payer = new Payer();
$payer->setPaymentMethod('SwiftWave'); // Your system name, e.g., SwiftWave
```

### Amount

Specify a payment amount and the currency:

```php
// Amount Object
$amountIns = new Amount();
$amountIns->setTotal(20)->setCurrency('USD'); // Provide a valid currency code
```

### Transaction

Create a Transaction resource where the amount object is set:

```php
// Transaction Object
$trans = new Transaction();
$trans->setAmount($amountIns);
```

### RedirectUrls

Set the URLs where buyers should redirect after a transaction is completed or canceled:

```php
// RedirectUrls Object
$urls = new RedirectUrls();
$urls->setSuccessUrl('http://your-merchant-domain.com/example-success.php') // Success URL
    ->setCancelUrl('http://your-merchant-domain.com/'); // Cancel URL
```

### Payment

Create a payment resource with Payer, Amount, RedirectUrls, and merchant Credentials (Client ID and Client Secret):

```php
// Payment Object
$payment = new Payment();
$payment->setCredentials([
        'client_id' => 'your_client_id_here', // Provide correct client ID
        'client_secret' => 'your_client_secret_here' // Provide correct client secret
    ])
    ->setRedirectUrls($urls)
    ->setPayer($payer)
    ->setTransaction($trans);

try {
    $payment->create(); // Create payment
    header("Location: ".$payment->getApprovedUrl()); // Checkout URL
} catch (Exception $ex) {
    print $ex;
    exit;
}
```

### Dependencies

Make sure to use the required SwiftWave API classes:

```php
use SwiftWave\Api\Payer;
use SwiftWave\Api\Amount;
use SwiftWave\Api\Transaction;
use SwiftWave\Api\RedirectUrls;
use SwiftWave\Api\Payment;
```

## Notes

- Ensure the provided client ID and client secret are accurate.
- Customize URLs according to your application's redirect requirements.
- Replace placeholders with actual values for smooth integration.
```
