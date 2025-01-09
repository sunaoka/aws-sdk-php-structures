<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DetachLoadBalancerFromSubnets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<string> $Subnets
 */
class DetachLoadBalancerFromSubnetsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
