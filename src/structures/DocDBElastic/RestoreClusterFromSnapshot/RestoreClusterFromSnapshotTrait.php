<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\RestoreClusterFromSnapshot;

trait RestoreClusterFromSnapshotTrait
{
    /**
     * @param RestoreClusterFromSnapshotRequest $args
     * @return RestoreClusterFromSnapshotResponse
     */
    public function restoreClusterFromSnapshot(RestoreClusterFromSnapshotRequest $args)
    {
        $result = parent::restoreClusterFromSnapshot($args->toArray());
        return new RestoreClusterFromSnapshotResponse($result->toArray());
    }
}
