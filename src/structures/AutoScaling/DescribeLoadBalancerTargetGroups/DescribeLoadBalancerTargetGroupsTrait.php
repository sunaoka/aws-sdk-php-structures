<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLoadBalancerTargetGroups;

trait DescribeLoadBalancerTargetGroupsTrait
{
    /**
     * @param DescribeLoadBalancerTargetGroupsRequest $args
     * @return DescribeLoadBalancerTargetGroupsResponse
     */
    public function describeLoadBalancerTargetGroups(DescribeLoadBalancerTargetGroupsRequest $args)
    {
        $result = parent::describeLoadBalancerTargetGroups($args->toArray());
        return new DescribeLoadBalancerTargetGroupsResponse($result->toArray());
    }
}
