<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRefreshSchedule;

trait UpdateRefreshScheduleTrait
{
    /**
     * @param UpdateRefreshScheduleRequest $args
     * @return UpdateRefreshScheduleResponse
     */
    public function updateRefreshSchedule(UpdateRefreshScheduleRequest $args)
    {
        $result = parent::updateRefreshSchedule($args->toArray());
        return new UpdateRefreshScheduleResponse($result->toArray());
    }
}
