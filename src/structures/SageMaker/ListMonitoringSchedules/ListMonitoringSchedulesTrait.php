<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMonitoringSchedules;

trait ListMonitoringSchedulesTrait
{
    /**
     * @param ListMonitoringSchedulesRequest $args
     * @return ListMonitoringSchedulesResponse
     */
    public function listMonitoringSchedules(ListMonitoringSchedulesRequest $args)
    {
        $result = parent::listMonitoringSchedules($args->toArray());
        return new ListMonitoringSchedulesResponse($result->toArray());
    }
}
