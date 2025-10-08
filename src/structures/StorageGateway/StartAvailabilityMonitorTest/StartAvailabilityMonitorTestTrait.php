<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartAvailabilityMonitorTest;

trait StartAvailabilityMonitorTestTrait
{
    /**
     * @param StartAvailabilityMonitorTestRequest $args
     * @return StartAvailabilityMonitorTestResponse
     */
    public function startAvailabilityMonitorTest(StartAvailabilityMonitorTestRequest $args)
    {
        $result = parent::startAvailabilityMonitorTest($args->toArray());
        return new StartAvailabilityMonitorTestResponse($result->toArray());
    }
}
