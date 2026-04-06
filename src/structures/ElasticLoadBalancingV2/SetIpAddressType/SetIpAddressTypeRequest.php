<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetIpAddressType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4' $IpAddressType
 */
class SetIpAddressTypeRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     IpAddressType: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
