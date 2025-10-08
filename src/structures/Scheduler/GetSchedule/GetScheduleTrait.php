<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule;

trait GetScheduleTrait
{
    /**
     * @param GetScheduleRequest $args
     * @return GetScheduleResponse
     */
    public function getSchedule(GetScheduleRequest $args)
    {
        $result = parent::getSchedule($args->toArray());
        return new GetScheduleResponse($result->toArray());
    }
}
