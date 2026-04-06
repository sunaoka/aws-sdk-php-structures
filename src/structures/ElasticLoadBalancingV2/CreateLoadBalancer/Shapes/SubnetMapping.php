<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $AllocationId
 * @property string|null $PrivateIPv4Address
 * @property string|null $IPv6Address
 * @property string|null $SourceNatIpv6Prefix
 */
class SubnetMapping extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     AllocationId?: string|null,
     *     PrivateIPv4Address?: string|null,
     *     IPv6Address?: string|null,
     *     SourceNatIpv6Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
