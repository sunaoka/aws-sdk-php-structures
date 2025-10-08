<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule;

trait CreateScheduleTrait
{
    /**
     * @param CreateScheduleRequest $args
     * @return CreateScheduleResponse
     */
    public function createSchedule(CreateScheduleRequest $args)
    {
        $result = parent::createSchedule($args->toArray());
        return new CreateScheduleResponse($result->toArray());
    }
}
