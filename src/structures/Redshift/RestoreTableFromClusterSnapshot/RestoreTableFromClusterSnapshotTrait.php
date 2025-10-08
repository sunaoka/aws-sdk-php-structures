<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreTableFromClusterSnapshot;

trait RestoreTableFromClusterSnapshotTrait
{
    /**
     * @param RestoreTableFromClusterSnapshotRequest $args
     * @return RestoreTableFromClusterSnapshotResponse
     */
    public function restoreTableFromClusterSnapshot(RestoreTableFromClusterSnapshotRequest $args)
    {
        $result = parent::restoreTableFromClusterSnapshot($args->toArray());
        return new RestoreTableFromClusterSnapshotResponse($result->toArray());
    }
}
