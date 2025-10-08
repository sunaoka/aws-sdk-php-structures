<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopMonitoringSchedule;

trait StopMonitoringScheduleTrait
{
    /**
     * @param StopMonitoringScheduleRequest $args
     * @return void
     */
    public function stopMonitoringSchedule(StopMonitoringScheduleRequest $args)
    {
        parent::stopMonitoringSchedule($args->toArray());
    }
}
