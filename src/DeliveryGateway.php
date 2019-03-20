<?php

namespace Omnipay\Cod;

use Omnipay\Common\AbstractGateway;

/**
 * Class DeliveryGateway
 * @package Omnipay\Cod
 */
class DeliveryGateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Cod_Delivery';
    }

    public function setPayId($value)
    {
        return $this->setParameter('pay_id', $value);
    }

    public function getPayId()
    {
        return $this->getParameter('pay_id');
    }


    public function setModule($value)
    {
        return $this->setParameter('module', $value);
    }

    public function getModule()
    {
        return $this->getParameter('module');
    }


    public function setOrderId($value)
    {
        return $this->setParameter('order_id', $value);
    }

    public function getOrderId()
    {
        return $this->getParameter('order_id');
    }


    public function setCustomerId($value)
    {
        return $this->setParameter('customer_id', $value);
    }

    public function getCustomerId()
    {
        return $this->getParameter('customer_id');
    }


    public function setPaymentCode($value)
    {
        return $this->setParameter('payment_code', $value);
    }

    public function getPaymentCode()
    {
        return $this->getParameter('payment_code');
    }


    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }


    public function setCreated($value)
    {
        return $this->setParameter('created', $value);
    }

    public function getCreated()
    {
        return $this->getParameter('created');
    }


    public function setCallbackUrl($value)
    {
        return $this->setParameter('callback_url', $value);
    }

    public function getCallbackUrl()
    {
        return $this->getParameter('callback_url');
    }


    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Cod\Message\DeliveryPurchaseRequest', $parameters);
    }


    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Cod\Message\DeliveryCompletePurchaseRequest', $parameters);
    }
}
