<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeLoadBalancersRequest extends Request
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
