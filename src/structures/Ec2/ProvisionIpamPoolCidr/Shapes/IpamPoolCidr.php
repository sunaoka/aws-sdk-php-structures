<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property 'pending-provision'|'provisioned'|'failed-provision'|'pending-deprovision'|'deprovisioned'|'failed-deprovision'|'pending-import'|'failed-import' $State
 * @property IpamPoolCidrFailureReason $FailureReason
 * @property string $IpamPoolCidrId
 * @property int $NetmaskLength
 */
class IpamPoolCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     State?: 'pending-provision'|'provisioned'|'failed-provision'|'pending-deprovision'|'deprovisioned'|'failed-deprovision'|'pending-import'|'failed-import',
     *     FailureReason?: IpamPoolCidrFailureReason,
     *     IpamPoolCidrId?: string,
     *     NetmaskLength?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
