<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPrefetchSchedule;

trait GetPrefetchScheduleTrait
{
    /**
     * @param GetPrefetchScheduleRequest $args
     * @return GetPrefetchScheduleResponse
     */
    public function getPrefetchSchedule(GetPrefetchScheduleRequest $args)
    {
        $result = parent::getPrefetchSchedule($args->toArray());
        return new GetPrefetchScheduleResponse($result->toArray());
    }
}
