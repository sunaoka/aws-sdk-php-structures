<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskFromSnapshot;

trait CreateDiskFromSnapshotTrait
{
    /**
     * @param CreateDiskFromSnapshotRequest $args
     * @return CreateDiskFromSnapshotResponse
     */
    public function createDiskFromSnapshot(CreateDiskFromSnapshotRequest $args)
    {
        $result = parent::createDiskFromSnapshot($args->toArray());
        return new CreateDiskFromSnapshotResponse($result->toArray());
    }
}
