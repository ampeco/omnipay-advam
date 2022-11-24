<?php

namespace Omnipay\Advam\Message;

class CreateCardRequest extends AbstractRequest
{
    public const WSDL_TEST = 'https://demo-webbank.advam.com/session/ws/V1_2/AdvamWebBankSession.wsdl';

    public const WSDL_PROD = 'https://webbank.advam.com/session/ws/V1_2/AdvamWebBankSession.wsdl';

    public function getEndPoint()
    {
        return '';
    }

    public function getBaseUrl(): string
    {
        return $this->getTestMode() ? static::WSDL_TEST : static::WSDL_PROD;
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function sendData($data)
    {
        //@TODO use \SoapClient
    }
}
