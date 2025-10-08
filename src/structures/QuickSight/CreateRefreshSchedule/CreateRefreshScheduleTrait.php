<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRefreshSchedule;

trait CreateRefreshScheduleTrait
{
    /**
     * @param CreateRefreshScheduleRequest $args
     * @return CreateRefreshScheduleResponse
     */
    public function createRefreshSchedule(CreateRefreshScheduleRequest $args)
    {
        $result = parent::createRefreshSchedule($args->toArray());
        return new CreateRefreshScheduleResponse($result->toArray());
    }
}
