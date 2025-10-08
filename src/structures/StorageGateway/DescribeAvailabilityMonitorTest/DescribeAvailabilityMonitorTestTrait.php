<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeAvailabilityMonitorTest;

trait DescribeAvailabilityMonitorTestTrait
{
    /**
     * @param DescribeAvailabilityMonitorTestRequest $args
     * @return DescribeAvailabilityMonitorTestResponse
     */
    public function describeAvailabilityMonitorTest(DescribeAvailabilityMonitorTestRequest $args)
    {
        $result = parent::describeAvailabilityMonitorTest($args->toArray());
        return new DescribeAvailabilityMonitorTestResponse($result->toArray());
    }
}
