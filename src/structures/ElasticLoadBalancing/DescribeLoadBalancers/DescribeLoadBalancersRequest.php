<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $LoadBalancerNames
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerNames?: list<string>|null,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
