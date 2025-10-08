<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingInstances;

trait DescribeAutoScalingInstancesTrait
{
    /**
     * @param DescribeAutoScalingInstancesRequest $args
     * @return DescribeAutoScalingInstancesResponse
     */
    public function describeAutoScalingInstances(DescribeAutoScalingInstancesRequest $args)
    {
        $result = parent::describeAutoScalingInstances($args->toArray());
        return new DescribeAutoScalingInstancesResponse($result->toArray());
    }
}
