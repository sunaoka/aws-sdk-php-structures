<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterFromSnapshot;

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
