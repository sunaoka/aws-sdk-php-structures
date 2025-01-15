<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $LoadBalancerArns
 * @property list<string>|null $Names
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArns?: list<string>|null,
     *     Names?: list<string>|null,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
