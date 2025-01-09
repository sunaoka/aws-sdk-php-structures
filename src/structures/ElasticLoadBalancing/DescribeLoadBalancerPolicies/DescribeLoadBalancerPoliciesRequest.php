<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<string> $PolicyNames
 */
class DescribeLoadBalancerPoliciesRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName?: string,
     *     PolicyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
