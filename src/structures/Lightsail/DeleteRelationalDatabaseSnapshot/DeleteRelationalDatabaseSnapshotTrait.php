<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteRelationalDatabaseSnapshot;

trait DeleteRelationalDatabaseSnapshotTrait
{
    /**
     * @param DeleteRelationalDatabaseSnapshotRequest $args
     * @return DeleteRelationalDatabaseSnapshotResponse
     */
    public function deleteRelationalDatabaseSnapshot(DeleteRelationalDatabaseSnapshotRequest $args)
    {
        $result = parent::deleteRelationalDatabaseSnapshot($args->toArray());
        return new DeleteRelationalDatabaseSnapshotResponse($result->toArray());
    }
}
