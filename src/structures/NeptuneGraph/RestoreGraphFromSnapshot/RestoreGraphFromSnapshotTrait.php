<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot;

trait RestoreGraphFromSnapshotTrait
{
    /**
     * @param RestoreGraphFromSnapshotRequest $args
     * @return RestoreGraphFromSnapshotResponse
     */
    public function restoreGraphFromSnapshot(RestoreGraphFromSnapshotRequest $args)
    {
        $result = parent::restoreGraphFromSnapshot($args->toArray());
        return new RestoreGraphFromSnapshotResponse($result->toArray());
    }
}
