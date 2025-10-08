<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreFromSnapshot;

trait RestoreFromSnapshotTrait
{
    /**
     * @param RestoreFromSnapshotRequest $args
     * @return RestoreFromSnapshotResponse
     */
    public function restoreFromSnapshot(RestoreFromSnapshotRequest $args)
    {
        $result = parent::restoreFromSnapshot($args->toArray());
        return new RestoreFromSnapshotResponse($result->toArray());
    }
}
