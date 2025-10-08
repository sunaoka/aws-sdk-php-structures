<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchDeleteClusterSnapshots;

trait BatchDeleteClusterSnapshotsTrait
{
    /**
     * @param BatchDeleteClusterSnapshotsRequest $args
     * @return BatchDeleteClusterSnapshotsResponse
     */
    public function batchDeleteClusterSnapshots(BatchDeleteClusterSnapshotsRequest $args)
    {
        $result = parent::batchDeleteClusterSnapshots($args->toArray());
        return new BatchDeleteClusterSnapshotsResponse($result->toArray());
    }
}
