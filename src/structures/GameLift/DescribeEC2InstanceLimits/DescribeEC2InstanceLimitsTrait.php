<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeEC2InstanceLimits;

trait DescribeEC2InstanceLimitsTrait
{
    /**
     * @param DescribeEC2InstanceLimitsRequest $args
     * @return DescribeEC2InstanceLimitsResponse
     */
    public function describeEC2InstanceLimits(DescribeEC2InstanceLimitsRequest $args)
    {
        $result = parent::describeEC2InstanceLimits($args->toArray());
        return new DescribeEC2InstanceLimitsResponse($result->toArray());
    }
}
