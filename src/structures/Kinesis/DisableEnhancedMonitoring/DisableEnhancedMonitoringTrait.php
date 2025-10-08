<?php

namespace Sunaoka\Aws\Structures\Kinesis\DisableEnhancedMonitoring;

trait DisableEnhancedMonitoringTrait
{
    /**
     * @param DisableEnhancedMonitoringRequest $args
     * @return DisableEnhancedMonitoringResponse
     */
    public function disableEnhancedMonitoring(DisableEnhancedMonitoringRequest $args)
    {
        $result = parent::disableEnhancedMonitoring($args->toArray());
        return new DisableEnhancedMonitoringResponse($result->toArray());
    }
}
