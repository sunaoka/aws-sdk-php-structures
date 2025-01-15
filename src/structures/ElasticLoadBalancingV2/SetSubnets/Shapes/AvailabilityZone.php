<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ZoneName
 * @property string|null $SubnetId
 * @property string|null $OutpostId
 * @property list<LoadBalancerAddress>|null $LoadBalancerAddresses
 * @property list<string>|null $SourceNatIpv6Prefixes
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{
     *     ZoneName?: string|null,
     *     SubnetId?: string|null,
     *     OutpostId?: string|null,
     *     LoadBalancerAddresses?: list<LoadBalancerAddress>|null,
     *     SourceNatIpv6Prefixes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
