<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteTopicRefreshSchedule;

trait DeleteTopicRefreshScheduleTrait
{
    /**
     * @param DeleteTopicRefreshScheduleRequest $args
     * @return DeleteTopicRefreshScheduleResponse
     */
    public function deleteTopicRefreshSchedule(DeleteTopicRefreshScheduleRequest $args)
    {
        $result = parent::deleteTopicRefreshSchedule($args->toArray());
        return new DeleteTopicRefreshScheduleResponse($result->toArray());
    }
}
