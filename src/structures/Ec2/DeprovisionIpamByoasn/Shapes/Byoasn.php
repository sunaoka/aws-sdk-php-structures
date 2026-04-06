<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamByoasn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Asn
 * @property string|null $IpamId
 * @property string|null $StatusMessage
 * @property 'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|null $State
 */
class Byoasn extends Shape
{
    /**
     * @param array{
     *     Asn?: string|null,
     *     IpamId?: string|null,
     *     StatusMessage?: string|null,
     *     State?: 'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
