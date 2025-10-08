<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob;

trait StartDashboardSnapshotJobTrait
{
    /**
     * @param StartDashboardSnapshotJobRequest $args
     * @return StartDashboardSnapshotJobResponse
     */
    public function startDashboardSnapshotJob(StartDashboardSnapshotJobRequest $args)
    {
        $result = parent::startDashboardSnapshotJob($args->toArray());
        return new StartDashboardSnapshotJobResponse($result->toArray());
    }
}
