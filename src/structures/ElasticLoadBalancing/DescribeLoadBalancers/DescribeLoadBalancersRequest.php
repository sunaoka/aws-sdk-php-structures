<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LoadBalancerNames
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerNames?: list<string>,
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
