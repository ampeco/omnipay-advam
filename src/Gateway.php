<?php
namespace Omnipay\Advam;

use Omnipay\Advam\Message\CreateCardRequest;
use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{
    use CommonParameters;

    public function getName()
    {
        return 'ADVAM';
    }

    public function createCard(array $options = [])
    {
        return $this->createRequest(CreateCardRequest::class, $options);
    }
}
