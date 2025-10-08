<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\RestoreTableFromSnapshot;

trait RestoreTableFromSnapshotTrait
{
    /**
     * @param RestoreTableFromSnapshotRequest $args
     * @return RestoreTableFromSnapshotResponse
     */
    public function restoreTableFromSnapshot(RestoreTableFromSnapshotRequest $args)
    {
        $result = parent::restoreTableFromSnapshot($args->toArray());
        return new RestoreTableFromSnapshotResponse($result->toArray());
    }
}
