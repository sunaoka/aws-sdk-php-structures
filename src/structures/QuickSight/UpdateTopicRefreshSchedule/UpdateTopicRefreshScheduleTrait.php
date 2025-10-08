<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicRefreshSchedule;

trait UpdateTopicRefreshScheduleTrait
{
    /**
     * @param UpdateTopicRefreshScheduleRequest $args
     * @return UpdateTopicRefreshScheduleResponse
     */
    public function updateTopicRefreshSchedule(UpdateTopicRefreshScheduleRequest $args)
    {
        $result = parent::updateTopicRefreshSchedule($args->toArray());
        return new UpdateTopicRefreshScheduleResponse($result->toArray());
    }
}
