<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun;

trait ScheduleRunTrait
{
    /**
     * @param ScheduleRunRequest $args
     * @return ScheduleRunResponse
     */
    public function scheduleRun(ScheduleRunRequest $args)
    {
        $result = parent::scheduleRun($args->toArray());
        return new ScheduleRunResponse($result->toArray());
    }
}
