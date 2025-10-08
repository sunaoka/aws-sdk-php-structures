<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabaseFromSnapshot;

trait CreateRelationalDatabaseFromSnapshotTrait
{
    /**
     * @param CreateRelationalDatabaseFromSnapshotRequest $args
     * @return CreateRelationalDatabaseFromSnapshotResponse
     */
    public function createRelationalDatabaseFromSnapshot(CreateRelationalDatabaseFromSnapshotRequest $args)
    {
        $result = parent::createRelationalDatabaseFromSnapshot($args->toArray());
        return new CreateRelationalDatabaseFromSnapshotResponse($result->toArray());
    }
}
