<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeletePrefetchSchedule;

trait DeletePrefetchScheduleTrait
{
    /**
     * @param DeletePrefetchScheduleRequest $args
     * @return DeletePrefetchScheduleResponse
     */
    public function deletePrefetchSchedule(DeletePrefetchScheduleRequest $args)
    {
        $result = parent::deletePrefetchSchedule($args->toArray());
        return new DeletePrefetchScheduleResponse($result->toArray());
    }
}
