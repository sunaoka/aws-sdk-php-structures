<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule;

trait UpdateWorkerScheduleTrait
{
    /**
     * @param UpdateWorkerScheduleRequest $args
     * @return UpdateWorkerScheduleResponse
     */
    public function updateWorkerSchedule(UpdateWorkerScheduleRequest $args)
    {
        $result = parent::updateWorkerSchedule($args->toArray());
        return new UpdateWorkerScheduleResponse($result->toArray());
    }
}
