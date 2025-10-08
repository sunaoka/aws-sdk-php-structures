<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteMonitoringSchedule;

trait DeleteMonitoringScheduleTrait
{
    /**
     * @param DeleteMonitoringScheduleRequest $args
     * @return void
     */
    public function deleteMonitoringSchedule(DeleteMonitoringScheduleRequest $args)
    {
        parent::deleteMonitoringSchedule($args->toArray());
    }
}
