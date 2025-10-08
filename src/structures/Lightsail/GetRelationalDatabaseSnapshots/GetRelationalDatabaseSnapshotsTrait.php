<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshots;

trait GetRelationalDatabaseSnapshotsTrait
{
    /**
     * @param GetRelationalDatabaseSnapshotsRequest $args
     * @return GetRelationalDatabaseSnapshotsResponse
     */
    public function getRelationalDatabaseSnapshots(GetRelationalDatabaseSnapshotsRequest $args)
    {
        $result = parent::getRelationalDatabaseSnapshots($args->toArray());
        return new GetRelationalDatabaseSnapshotsResponse($result->toArray());
    }
}
