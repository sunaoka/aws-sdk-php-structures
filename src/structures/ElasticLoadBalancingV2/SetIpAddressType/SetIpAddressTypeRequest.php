<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetIpAddressType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property 'ipv4'|'dualstack' $IpAddressType
 */
class SetIpAddressTypeRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     IpAddressType: 'ipv4'|'dualstack'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
