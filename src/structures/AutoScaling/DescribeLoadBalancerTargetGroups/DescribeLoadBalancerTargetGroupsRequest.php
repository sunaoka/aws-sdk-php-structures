<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancerTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeLoadBalancerTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
