<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property 'pending-provision'|'provisioned'|'failed-provision'|'pending-deprovision'|'deprovisioned'|'failed-deprovision'|'pending-import'|'failed-import'|null $State
 * @property IpamPoolCidrFailureReason|null $FailureReason
 * @property string|null $IpamPoolCidrId
 * @property int|null $NetmaskLength
 */
class IpamPoolCidr extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     State?: 'pending-provision'|'provisioned'|'failed-provision'|'pending-deprovision'|'deprovisioned'|'failed-deprovision'|'pending-import'|'failed-import'|null,
     *     FailureReason?: IpamPoolCidrFailureReason|null,
     *     IpamPoolCidrId?: string|null,
     *     NetmaskLength?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
