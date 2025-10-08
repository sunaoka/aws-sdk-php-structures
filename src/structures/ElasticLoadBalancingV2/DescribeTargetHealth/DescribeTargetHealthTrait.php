<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth;

trait DescribeTargetHealthTrait
{
    /**
     * @param DescribeTargetHealthRequest $args
     * @return DescribeTargetHealthResponse
     */
    public function describeTargetHealth(DescribeTargetHealthRequest $args)
    {
        $result = parent::describeTargetHealth($args->toArray());
        return new DescribeTargetHealthResponse($result->toArray());
    }
}
