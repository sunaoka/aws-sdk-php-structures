<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LoadBalancerArn
 * @property list<string>|null $TargetGroupArns
 * @property list<string>|null $Names
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn?: string|null,
     *     TargetGroupArns?: list<string>|null,
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
