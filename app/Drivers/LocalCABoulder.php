<?php

namespace App\Drivers;

/**
 * A transporter driver from LetsEncrypt 
 */
class LocalCABoulder extends AbstractBoulder implements BoulderInterface
{
    /**
     * @inheritDoc
     */
    public function submitOrder($csr, $identifiers, $notBefore, $notAfter)
    {
    }

    /**
     * @inheritDoc
     */
    public function authz($order, $domain)
    {
    }

    /**
     * @inheritDoc
     */
    public function revokeCert($certificate, $reason)
    {
    }
}
