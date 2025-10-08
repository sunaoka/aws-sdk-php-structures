<?php

namespace Sunaoka\Aws\Structures\AutoScalingPlans\DescribeScalingPlans;

trait DescribeScalingPlansTrait
{
    /**
     * @param DescribeScalingPlansRequest $args
     * @return DescribeScalingPlansResponse
     */
    public function describeScalingPlans(DescribeScalingPlansRequest $args)
    {
        $result = parent::describeScalingPlans($args->toArray());
        return new DescribeScalingPlansResponse($result->toArray());
    }
}
