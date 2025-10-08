<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchModifyClusterSnapshots;

trait BatchModifyClusterSnapshotsTrait
{
    /**
     * @param BatchModifyClusterSnapshotsRequest $args
     * @return BatchModifyClusterSnapshotsResponse
     */
    public function batchModifyClusterSnapshots(BatchModifyClusterSnapshotsRequest $args)
    {
        $result = parent::batchModifyClusterSnapshots($args->toArray());
        return new BatchModifyClusterSnapshotsResponse($result->toArray());
    }
}
