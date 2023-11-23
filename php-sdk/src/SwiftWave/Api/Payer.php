<?php
namespace SwiftWave\Api;

use SwiftWave\Common\SwiftWaveModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends SwiftWaveModel
{

    /**
     * Valid Values: ["SwiftWave"]
     * method will be like SwiftWave, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
