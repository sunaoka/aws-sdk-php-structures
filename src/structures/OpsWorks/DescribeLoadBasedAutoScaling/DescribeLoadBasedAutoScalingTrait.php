<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLoadBasedAutoScaling;

trait DescribeLoadBasedAutoScalingTrait
{
    /**
     * @param DescribeLoadBasedAutoScalingRequest $args
     * @return DescribeLoadBasedAutoScalingResponse
     */
    public function describeLoadBasedAutoScaling(DescribeLoadBasedAutoScalingRequest $args)
    {
        $result = parent::describeLoadBasedAutoScaling($args->toArray());
        return new DescribeLoadBasedAutoScalingResponse($result->toArray());
    }
}
