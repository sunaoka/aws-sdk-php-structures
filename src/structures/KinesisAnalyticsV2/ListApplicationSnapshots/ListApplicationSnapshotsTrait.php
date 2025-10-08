<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationSnapshots;

trait ListApplicationSnapshotsTrait
{
    /**
     * @param ListApplicationSnapshotsRequest $args
     * @return ListApplicationSnapshotsResponse
     */
    public function listApplicationSnapshots(ListApplicationSnapshotsRequest $args)
    {
        $result = parent::listApplicationSnapshots($args->toArray());
        return new ListApplicationSnapshotsResponse($result->toArray());
    }
}
