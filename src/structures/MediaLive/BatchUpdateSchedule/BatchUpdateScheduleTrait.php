<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule;

trait BatchUpdateScheduleTrait
{
    /**
     * @param BatchUpdateScheduleRequest $args
     * @return BatchUpdateScheduleResponse
     */
    public function batchUpdateSchedule(BatchUpdateScheduleRequest $args)
    {
        $result = parent::batchUpdateSchedule($args->toArray());
        return new BatchUpdateScheduleResponse($result->toArray());
    }
}
