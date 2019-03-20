<?php

namespace Omnipay\Cod\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Cod\Helper;

/**
 * Class DeliveryCompletePurchaseRequest
 * @package Omnipay\Cod\Message
 */
class DeliveryCompletePurchaseRequest extends AbstractDeliveryRequest
{

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->getRequestParams();
    }


    public function setRequestParams($value)
    {
        $this->setParameter('request_params', $value);
    }


    public function getRequestParams()
    {
        return $this->getParameter('request_params');
    }


    public function getRequestParam($key)
    {
        $params = $this->getRequestParams();
        if (isset($params[$key])) {
            return $params[$key];
        } else {
            return null;
        }
    }


    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $gateway = array(
            'pay_id'       => $this->getPayId(),
            'module'       => $this->getModule(),
            'order_id'     => $this->getOrderId(),
            'customer_id'  => $this->getCustomerId(),
            'payment_code' => $this->getPaymentCode(),
            'amount'       => $this->getAmount(),
            'created'      => $this->getCreated(),
            'callback_url' => $this->getCallbackUrl()
        );

        if ($this->getKey()) {
            $gateway['sign'] = Helper::getSignByDataAndKey($gateway, $this->getKey());
        }

        $data['is_paid'] = false;
        if (isset($data['sign']) && $data['sign'] == $gateway['sign']) {
            $data['is_paid'] = true;
        }

        return $this->response = new DeliveryCompletePurchaseResponse($this, $data);
    }
}
