<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ZoneName
 * @property string $SubnetId
 * @property string $OutpostId
 * @property list<LoadBalancerAddress> $LoadBalancerAddresses
 * @property list<string> $SourceNatIpv6Prefixes
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     ZoneName?: string,
     *     SubnetId?: string,
     *     OutpostId?: string,
     *     LoadBalancerAddresses?: list<LoadBalancerAddress>,
     *     SourceNatIpv6Prefixes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
