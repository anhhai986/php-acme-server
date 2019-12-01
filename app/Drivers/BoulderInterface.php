<?php

namespace App\Drivers;

interface BoulderInterface
{
    /**
     * Submit a new order
     *
     * @param Csr $csr
     * @param array|Identifier[] $identifiers
     * @param Carbon $notBefore
     * @param Carbon $notAfter
     * @return Order
     */
    public function submitOrder($csr, $identifiers, $notBefore, $notAfter);

    /**
     * Authz Check
     *
     * @param Order $order
     * @param FQDN $domain
     * @return
     */
    public function authz($order, $domain);

    /**
     * Revoke certificate
     *
     * @param Certificate $certificate
     * @param Reason $reason
     * @return
     */
    public function revokeCert($certificate, $reason);
}
