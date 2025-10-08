<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSchedule;

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
