<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicRefreshSchedules;

trait ListTopicRefreshSchedulesTrait
{
    /**
     * @param ListTopicRefreshSchedulesRequest $args
     * @return ListTopicRefreshSchedulesResponse
     */
    public function listTopicRefreshSchedules(ListTopicRefreshSchedulesRequest $args)
    {
        $result = parent::listTopicRefreshSchedules($args->toArray());
        return new ListTopicRefreshSchedulesResponse($result->toArray());
    }
}
