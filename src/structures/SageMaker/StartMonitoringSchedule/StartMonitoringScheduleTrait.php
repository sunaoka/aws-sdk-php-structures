<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartMonitoringSchedule;

trait StartMonitoringScheduleTrait
{
    /**
     * @param StartMonitoringScheduleRequest $args
     * @return void
     */
    public function startMonitoringSchedule(StartMonitoringScheduleRequest $args)
    {
        parent::startMonitoringSchedule($args->toArray());
    }
}
