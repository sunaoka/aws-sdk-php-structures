<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlanResources;

trait DescribeScalingPlanResourcesTrait
{
    /**
     * @param DescribeScalingPlanResourcesRequest $args
     * @return DescribeScalingPlanResourcesResponse
     */
    public function describeScalingPlanResources(DescribeScalingPlanResourcesRequest $args)
    {
        $result = parent::describeScalingPlanResources($args->toArray());
        return new DescribeScalingPlanResourcesResponse($result->toArray());
    }
}
