<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $AllocationId
 * @property string $PrivateIPv4Address
 * @property string $IPv6Address
 */
class LoadBalancerAddress extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     AllocationId?: string,
     *     PrivateIPv4Address?: string,
     *     IPv6Address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
