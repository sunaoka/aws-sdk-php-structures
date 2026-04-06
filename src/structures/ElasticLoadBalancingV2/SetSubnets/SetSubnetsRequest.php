<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<string>|null $Subnets
 * @property list<Shapes\SubnetMapping>|null $SubnetMappings
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $IpAddressType
 */
class SetSubnetsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     Subnets?: list<string>|null,
     *     SubnetMappings?: list<Shapes\SubnetMapping>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
