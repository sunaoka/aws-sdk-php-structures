<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateMonitoringSchedule;

trait CreateMonitoringScheduleTrait
{
    /**
     * @param CreateMonitoringScheduleRequest $args
     * @return CreateMonitoringScheduleResponse
     */
    public function createMonitoringSchedule(CreateMonitoringScheduleRequest $args)
    {
        $result = parent::createMonitoringSchedule($args->toArray());
        return new CreateMonitoringScheduleResponse($result->toArray());
    }
}
