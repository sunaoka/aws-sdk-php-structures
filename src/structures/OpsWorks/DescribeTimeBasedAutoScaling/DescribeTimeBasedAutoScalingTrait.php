<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeTimeBasedAutoScaling;

trait DescribeTimeBasedAutoScalingTrait
{
    /**
     * @param DescribeTimeBasedAutoScalingRequest $args
     * @return DescribeTimeBasedAutoScalingResponse
     */
    public function describeTimeBasedAutoScaling(DescribeTimeBasedAutoScalingRequest $args)
    {
        $result = parent::describeTimeBasedAutoScaling($args->toArray());
        return new DescribeTimeBasedAutoScalingResponse($result->toArray());
    }
}
