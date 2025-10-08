<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot;

trait CreateInstancesFromSnapshotTrait
{
    /**
     * @param CreateInstancesFromSnapshotRequest $args
     * @return CreateInstancesFromSnapshotResponse
     */
    public function createInstancesFromSnapshot(CreateInstancesFromSnapshotRequest $args)
    {
        $result = parent::createInstancesFromSnapshot($args->toArray());
        return new CreateInstancesFromSnapshotResponse($result->toArray());
    }
}
