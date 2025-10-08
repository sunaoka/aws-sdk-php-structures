<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateMonitoringSchedule;

trait UpdateMonitoringScheduleTrait
{
    /**
     * @param UpdateMonitoringScheduleRequest $args
     * @return UpdateMonitoringScheduleResponse
     */
    public function updateMonitoringSchedule(UpdateMonitoringScheduleRequest $args)
    {
        $result = parent::updateMonitoringSchedule($args->toArray());
        return new UpdateMonitoringScheduleResponse($result->toArray());
    }
}
