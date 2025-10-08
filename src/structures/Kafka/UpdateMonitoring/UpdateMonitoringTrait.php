<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateMonitoring;

trait UpdateMonitoringTrait
{
    /**
     * @param UpdateMonitoringRequest $args
     * @return UpdateMonitoringResponse
     */
    public function updateMonitoring(UpdateMonitoringRequest $args)
    {
        $result = parent::updateMonitoring($args->toArray());
        return new UpdateMonitoringResponse($result->toArray());
    }
}
