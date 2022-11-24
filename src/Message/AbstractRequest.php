<?php
namespace Omnipay\Advam\Message;

use Omnipay\Common\Message\AbstractRequest as OmniPayAbstractRequest;

abstract class AbstractRequest extends OmniPayAbstractRequest
{
    public const API_URL_TEST = 'https://demo-gateway.api.advam.com/';

    public const API_URL_PROD = 'https://gateway.api.advam.com/';

    abstract public function getEndPoint();

    public function getBaseUrl(): string
    {
        return $this->getTestMode() ? static::API_URL_TEST : static::API_URL_PROD;
    }

    public function getHeaders(): array
    {
        /** SOAP based call has different content type */
        return [
            'Content-Type' => 'text/json',
            'Accept' => 'application/json',
        ];
    }

    public function getHttpMethod()
    {
        return 'POST';
    }

    /**
     * @inheritdoc
     */
    public function sendData($data)
    {
        $httpResponse = $this->httpClient->request(
            $this->getHttpMethod(),
            $this->getBaseUrl() . ltrim($this->getEndpoint(), '/'),
            $this->getHeaders(),
            json_encode($data),
        );

        /** @TODO return Response */
    }
}
