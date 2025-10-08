<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromSnapshot;

trait RestoreDBClusterFromSnapshotTrait
{
    /**
     * @param RestoreDBClusterFromSnapshotRequest $args
     * @return RestoreDBClusterFromSnapshotResponse
     */
    public function restoreDBClusterFromSnapshot(RestoreDBClusterFromSnapshotRequest $args)
    {
        $result = parent::restoreDBClusterFromSnapshot($args->toArray());
        return new RestoreDBClusterFromSnapshotResponse($result->toArray());
    }
}
