<?php namespace SwiftWave\Api;

use SwiftWave\Common\SwiftWaveModel;

/**
 * Class Transaction
 * @property \SwiftWave\Api\Amount amount
 *
 */

class Transaction extends SwiftWaveModel
{

    /**
     * @param \SwiftWave\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}