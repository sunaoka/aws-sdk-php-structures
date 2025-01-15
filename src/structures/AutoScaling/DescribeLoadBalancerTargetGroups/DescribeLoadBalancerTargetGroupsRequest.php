<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancerTargetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeLoadBalancerTargetGroupsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
