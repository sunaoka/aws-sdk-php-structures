<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups;

trait DescribeAutoScalingGroupsTrait
{
    /**
     * @param DescribeAutoScalingGroupsRequest $args
     * @return DescribeAutoScalingGroupsResponse
     */
    public function describeAutoScalingGroups(DescribeAutoScalingGroupsRequest $args)
    {
        $result = parent::describeAutoScalingGroups($args->toArray());
        return new DescribeAutoScalingGroupsResponse($result->toArray());
    }
}
