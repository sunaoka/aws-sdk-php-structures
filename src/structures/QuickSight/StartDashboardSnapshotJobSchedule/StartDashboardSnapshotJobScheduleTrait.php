<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJobSchedule;

trait StartDashboardSnapshotJobScheduleTrait
{
    /**
     * @param StartDashboardSnapshotJobScheduleRequest $args
     * @return StartDashboardSnapshotJobScheduleResponse
     */
    public function startDashboardSnapshotJobSchedule(StartDashboardSnapshotJobScheduleRequest $args)
    {
        $result = parent::startDashboardSnapshotJobSchedule($args->toArray());
        return new StartDashboardSnapshotJobScheduleResponse($result->toArray());
    }
}
