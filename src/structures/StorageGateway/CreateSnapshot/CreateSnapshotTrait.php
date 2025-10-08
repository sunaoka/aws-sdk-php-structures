<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSnapshot;

trait CreateSnapshotTrait
{
    /**
     * @param CreateSnapshotRequest $args
     * @return CreateSnapshotResponse
     */
    public function createSnapshot(CreateSnapshotRequest $args)
    {
        $result = parent::createSnapshot($args->toArray());
        return new CreateSnapshotResponse($result->toArray());
    }
}
