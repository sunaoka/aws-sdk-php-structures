<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $AllocationId
 * @property string|null $PrivateIPv4Address
 * @property string|null $IPv6Address
 */
class LoadBalancerAddress extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     AllocationId?: string|null,
     *     PrivateIPv4Address?: string|null,
     *     IPv6Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
