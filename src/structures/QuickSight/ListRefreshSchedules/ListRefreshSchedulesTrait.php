<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRefreshSchedules;

trait ListRefreshSchedulesTrait
{
    /**
     * @param ListRefreshSchedulesRequest $args
     * @return ListRefreshSchedulesResponse
     */
    public function listRefreshSchedules(ListRefreshSchedulesRequest $args)
    {
        $result = parent::listRefreshSchedules($args->toArray());
        return new ListRefreshSchedulesResponse($result->toArray());
    }
}
