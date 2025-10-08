<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringAlert;

trait UpdateMonitoringAlertTrait
{
    /**
     * @param UpdateMonitoringAlertRequest $args
     * @return UpdateMonitoringAlertResponse
     */
    public function updateMonitoringAlert(UpdateMonitoringAlertRequest $args)
    {
        $result = parent::updateMonitoringAlert($args->toArray());
        return new UpdateMonitoringAlertResponse($result->toArray());
    }
}
