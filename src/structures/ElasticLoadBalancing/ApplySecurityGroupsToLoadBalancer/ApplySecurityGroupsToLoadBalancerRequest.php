<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ApplySecurityGroupsToLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<string> $SecurityGroups
 */
class ApplySecurityGroupsToLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     SecurityGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
