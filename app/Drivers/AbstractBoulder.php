<?php

namespace App\Drivers;

abstract class AbstractBoulder implements BoulderInterface
{
    /**
     * @inheritDoc
     */
    abstract public function submitOrder($csr, $identifiers, $notBefore, $notAfter);

    /**
     * @inheritDoc
     */
    abstract public function authz($order, $domain);

    /**
     * @inheritDoc
     */
    abstract public function revokeCert($certificate, $reason);
}
