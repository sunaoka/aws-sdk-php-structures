<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LoadBalancerName
 * @property list<string>|null $PolicyNames
 */
class DescribeLoadBalancerPoliciesRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName?: string|null,
     *     PolicyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
