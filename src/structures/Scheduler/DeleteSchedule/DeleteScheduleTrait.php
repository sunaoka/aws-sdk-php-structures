<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteSchedule;

trait DeleteScheduleTrait
{
    /**
     * @param DeleteScheduleRequest $args
     * @return DeleteScheduleResponse
     */
    public function deleteSchedule(DeleteScheduleRequest $args)
    {
        $result = parent::deleteSchedule($args->toArray());
        return new DeleteScheduleResponse($result->toArray());
    }
}
