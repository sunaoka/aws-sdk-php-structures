<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AdvertiseByoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property 'PENDING_PROVISIONING'|'READY'|'PENDING_ADVERTISING'|'ADVERTISING'|'PENDING_WITHDRAWING'|'PENDING_DEPROVISIONING'|'DEPROVISIONED'|'FAILED_PROVISION'|'FAILED_ADVERTISING'|'FAILED_WITHDRAW'|'FAILED_DEPROVISION'|null $State
 * @property list<ByoipCidrEvent>|null $Events
 */
class ByoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     State?: 'PENDING_PROVISIONING'|'READY'|'PENDING_ADVERTISING'|'ADVERTISING'|'PENDING_WITHDRAWING'|'PENDING_DEPROVISIONING'|'DEPROVISIONED'|'FAILED_PROVISION'|'FAILED_ADVERTISING'|'FAILED_WITHDRAW'|'FAILED_DEPROVISION'|null,
     *     Events?: list<ByoipCidrEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
