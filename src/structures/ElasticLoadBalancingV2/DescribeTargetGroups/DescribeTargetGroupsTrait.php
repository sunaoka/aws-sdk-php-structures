<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroups;

trait DescribeTargetGroupsTrait
{
    /**
     * @param DescribeTargetGroupsRequest $args
     * @return DescribeTargetGroupsResponse
     */
    public function describeTargetGroups(DescribeTargetGroupsRequest $args)
    {
        $result = parent::describeTargetGroups($args->toArray());
        return new DescribeTargetGroupsResponse($result->toArray());
    }
}
