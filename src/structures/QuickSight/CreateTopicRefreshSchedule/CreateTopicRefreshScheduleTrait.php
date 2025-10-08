<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopicRefreshSchedule;

trait CreateTopicRefreshScheduleTrait
{
    /**
     * @param CreateTopicRefreshScheduleRequest $args
     * @return CreateTopicRefreshScheduleResponse
     */
    public function createTopicRefreshSchedule(CreateTopicRefreshScheduleRequest $args)
    {
        $result = parent::createTopicRefreshSchedule($args->toArray());
        return new CreateTopicRefreshScheduleResponse($result->toArray());
    }
}
