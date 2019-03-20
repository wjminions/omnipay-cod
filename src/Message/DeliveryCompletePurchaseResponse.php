<?php

namespace Omnipay\Cod\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class DeliveryCompletePurchaseResponse
 * @package Omnipay\Cod\Message
 */
class DeliveryCompletePurchaseResponse extends AbstractResponse
{

    public function isPaid()
    {
        if ($this->data['is_paid']) {
            return true;
        }

        return false;
    }


    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return true;
    }
}
