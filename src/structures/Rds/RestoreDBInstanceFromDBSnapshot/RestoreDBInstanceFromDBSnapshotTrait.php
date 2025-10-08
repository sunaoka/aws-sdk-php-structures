<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromDBSnapshot;

trait RestoreDBInstanceFromDBSnapshotTrait
{
    /**
     * @param RestoreDBInstanceFromDBSnapshotRequest $args
     * @return RestoreDBInstanceFromDBSnapshotResponse
     */
    public function restoreDBInstanceFromDBSnapshot(RestoreDBInstanceFromDBSnapshotRequest $args)
    {
        $result = parent::restoreDBInstanceFromDBSnapshot($args->toArray());
        return new RestoreDBInstanceFromDBSnapshotResponse($result->toArray());
    }
}
