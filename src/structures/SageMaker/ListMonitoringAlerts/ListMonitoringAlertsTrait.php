<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlerts;

trait ListMonitoringAlertsTrait
{
    /**
     * @param ListMonitoringAlertsRequest $args
     * @return ListMonitoringAlertsResponse
     */
    public function listMonitoringAlerts(ListMonitoringAlertsRequest $args)
    {
        $result = parent::listMonitoringAlerts($args->toArray());
        return new ListMonitoringAlertsResponse($result->toArray());
    }
}
