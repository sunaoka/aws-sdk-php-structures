<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob;

trait DescribeDashboardSnapshotJobTrait
{
    /**
     * @param DescribeDashboardSnapshotJobRequest $args
     * @return DescribeDashboardSnapshotJobResponse
     */
    public function describeDashboardSnapshotJob(DescribeDashboardSnapshotJobRequest $args)
    {
        $result = parent::describeDashboardSnapshotJob($args->toArray());
        return new DescribeDashboardSnapshotJobResponse($result->toArray());
    }
}
