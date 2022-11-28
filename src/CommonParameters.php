<?php
namespace Omnipay\Advam;

trait CommonParameters
{

    public function setAccountId($value)
    {
        return $this->setParameter('accountId', $value);
    }

    public function getAccountId()
    {
        return $this->getParameter('accountId');
    }

    public function setUsername($value)
    {
        return setParameter('username', $value);
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setPassword($value)
    {
        return setParameter('password', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

}
