<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshot;

trait GetRelationalDatabaseSnapshotTrait
{
    /**
     * @param GetRelationalDatabaseSnapshotRequest $args
     * @return GetRelationalDatabaseSnapshotResponse
     */
    public function getRelationalDatabaseSnapshot(GetRelationalDatabaseSnapshotRequest $args)
    {
        $result = parent::getRelationalDatabaseSnapshot($args->toArray());
        return new GetRelationalDatabaseSnapshotResponse($result->toArray());
    }
}
