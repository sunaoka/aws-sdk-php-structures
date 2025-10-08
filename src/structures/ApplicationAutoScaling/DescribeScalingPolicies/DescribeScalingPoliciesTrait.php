<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies;

trait DescribeScalingPoliciesTrait
{
    /**
     * @param DescribeScalingPoliciesRequest $args
     * @return DescribeScalingPoliciesResponse
     */
    public function describeScalingPolicies(DescribeScalingPoliciesRequest $args)
    {
        $result = parent::describeScalingPolicies($args->toArray());
        return new DescribeScalingPoliciesResponse($result->toArray());
    }
}
