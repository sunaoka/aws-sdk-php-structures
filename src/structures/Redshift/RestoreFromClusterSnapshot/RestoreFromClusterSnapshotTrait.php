<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreFromClusterSnapshot;

trait RestoreFromClusterSnapshotTrait
{
    /**
     * @param RestoreFromClusterSnapshotRequest $args
     * @return RestoreFromClusterSnapshotResponse
     */
    public function restoreFromClusterSnapshot(RestoreFromClusterSnapshotRequest $args)
    {
        $result = parent::restoreFromClusterSnapshot($args->toArray());
        return new RestoreFromClusterSnapshotResponse($result->toArray());
    }
}
