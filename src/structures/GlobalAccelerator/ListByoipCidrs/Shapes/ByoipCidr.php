<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListByoipCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property 'PENDING_PROVISIONING'|'READY'|'PENDING_ADVERTISING'|'ADVERTISING'|'PENDING_WITHDRAWING'|'PENDING_DEPROVISIONING'|'DEPROVISIONED'|'FAILED_PROVISION'|'FAILED_ADVERTISING'|'FAILED_WITHDRAW'|'FAILED_DEPROVISION' $State
 * @property list<ByoipCidrEvent> $Events
 */
class ByoipCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     State?: 'PENDING_PROVISIONING'|'READY'|'PENDING_ADVERTISING'|'ADVERTISING'|'PENDING_WITHDRAWING'|'PENDING_DEPROVISIONING'|'DEPROVISIONED'|'FAILED_PROVISION'|'FAILED_ADVERTISING'|'FAILED_WITHDRAW'|'FAILED_DEPROVISION',
     *     Events?: list<ByoipCidrEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
