<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetChannelSchedule;

trait GetChannelScheduleTrait
{
    /**
     * @param GetChannelScheduleRequest $args
     * @return GetChannelScheduleResponse
     */
    public function getChannelSchedule(GetChannelScheduleRequest $args)
    {
        $result = parent::getChannelSchedule($args->toArray());
        return new GetChannelScheduleResponse($result->toArray());
    }
}
