<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabaseSnapshot;

trait CreateRelationalDatabaseSnapshotTrait
{
    /**
     * @param CreateRelationalDatabaseSnapshotRequest $args
     * @return CreateRelationalDatabaseSnapshotResponse
     */
    public function createRelationalDatabaseSnapshot(CreateRelationalDatabaseSnapshotRequest $args)
    {
        $result = parent::createRelationalDatabaseSnapshot($args->toArray());
        return new CreateRelationalDatabaseSnapshotResponse($result->toArray());
    }
}
