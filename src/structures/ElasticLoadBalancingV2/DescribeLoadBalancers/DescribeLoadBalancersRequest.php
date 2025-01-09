<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LoadBalancerArns
 * @property list<string> $Names
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArns?: list<string>,
     *     Names?: list<string>,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
