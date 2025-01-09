<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $AllocationId
 * @property string $PrivateIPv4Address
 * @property string $IPv6Address
 * @property string $SourceNatIpv6Prefix
 */
class SubnetMapping extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     AllocationId?: string,
     *     PrivateIPv4Address?: string,
     *     IPv6Address?: string,
     *     SourceNatIpv6Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
