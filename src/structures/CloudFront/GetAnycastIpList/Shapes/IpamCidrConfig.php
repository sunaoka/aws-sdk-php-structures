<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetAnycastIpList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $IpamPoolArn
 * @property string|null $AnycastIp
 * @property 'provisioned'|'failed-provision'|'provisioning'|'deprovisioned'|'failed-deprovision'|'deprovisioning'|'advertised'|'failed-advertise'|'advertising'|'withdrawn'|'failed-withdraw'|'withdrawing'|null $Status
 */
class IpamCidrConfig extends Shape
{
    /**
     * @param array{
     *     Cidr: string,
     *     IpamPoolArn: string,
     *     AnycastIp?: string|null,
     *     Status?: 'provisioned'|'failed-provision'|'provisioning'|'deprovisioned'|'failed-deprovision'|'deprovisioning'|'advertised'|'failed-advertise'|'advertising'|'withdrawn'|'failed-withdraw'|'withdrawing'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
