<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateSchedule;

trait UpdateScheduleTrait
{
    /**
     * @param UpdateScheduleRequest $args
     * @return UpdateScheduleResponse
     */
    public function updateSchedule(UpdateScheduleRequest $args)
    {
        $result = parent::updateSchedule($args->toArray());
        return new UpdateScheduleResponse($result->toArray());
    }
}
