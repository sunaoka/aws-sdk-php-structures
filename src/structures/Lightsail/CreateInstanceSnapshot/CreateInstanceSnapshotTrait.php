<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstanceSnapshot;

trait CreateInstanceSnapshotTrait
{
    /**
     * @param CreateInstanceSnapshotRequest $args
     * @return CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshot(CreateInstanceSnapshotRequest $args)
    {
        $result = parent::createInstanceSnapshot($args->toArray());
        return new CreateInstanceSnapshotResponse($result->toArray());
    }
}
