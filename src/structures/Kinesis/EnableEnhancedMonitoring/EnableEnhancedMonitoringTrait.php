<?php

namespace Sunaoka\Aws\Structures\Kinesis\EnableEnhancedMonitoring;

trait EnableEnhancedMonitoringTrait
{
    /**
     * @param EnableEnhancedMonitoringRequest $args
     * @return EnableEnhancedMonitoringResponse
     */
    public function enableEnhancedMonitoring(EnableEnhancedMonitoringRequest $args)
    {
        $result = parent::enableEnhancedMonitoring($args->toArray());
        return new EnableEnhancedMonitoringResponse($result->toArray());
    }
}
