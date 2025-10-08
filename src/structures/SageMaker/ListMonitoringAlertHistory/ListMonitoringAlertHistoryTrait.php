<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringAlertHistory;

trait ListMonitoringAlertHistoryTrait
{
    /**
     * @param ListMonitoringAlertHistoryRequest $args
     * @return ListMonitoringAlertHistoryResponse
     */
    public function listMonitoringAlertHistory(ListMonitoringAlertHistoryRequest $args)
    {
        $result = parent::listMonitoringAlertHistory($args->toArray());
        return new ListMonitoringAlertHistoryResponse($result->toArray());
    }
}
