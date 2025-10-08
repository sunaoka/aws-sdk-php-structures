<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot;

trait RestoreVolumeFromSnapshotTrait
{
    /**
     * @param RestoreVolumeFromSnapshotRequest $args
     * @return RestoreVolumeFromSnapshotResponse
     */
    public function restoreVolumeFromSnapshot(RestoreVolumeFromSnapshotRequest $args)
    {
        $result = parent::restoreVolumeFromSnapshot($args->toArray());
        return new RestoreVolumeFromSnapshotResponse($result->toArray());
    }
}
