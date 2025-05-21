<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyIpPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property Shapes\IpamPools|null $IpamPools
 * @property list<'ipv4'>|null $RemoveIpamPools
 */
class ModifyIpPoolsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     IpamPools?: Shapes\IpamPools|null,
     *     RemoveIpamPools?: list<'ipv4'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
