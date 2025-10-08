<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule;

trait CreatePrefetchScheduleTrait
{
    /**
     * @param CreatePrefetchScheduleRequest $args
     * @return CreatePrefetchScheduleResponse
     */
    public function createPrefetchSchedule(CreatePrefetchScheduleRequest $args)
    {
        $result = parent::createPrefetchSchedule($args->toArray());
        return new CreatePrefetchScheduleResponse($result->toArray());
    }
}
