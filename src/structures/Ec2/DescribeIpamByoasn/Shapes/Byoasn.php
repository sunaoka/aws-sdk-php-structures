<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamByoasn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Asn
 * @property string $IpamId
 * @property string $StatusMessage
 * @property 'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned' $State
 */
class Byoasn extends Shape
{
    /**
     * @param array{
     *     Asn?: string,
     *     IpamId?: string,
     *     StatusMessage?: string,
     *     State?: 'deprovisioned'|'failed-deprovision'|'failed-provision'|'pending-deprovision'|'pending-provision'|'provisioned'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
