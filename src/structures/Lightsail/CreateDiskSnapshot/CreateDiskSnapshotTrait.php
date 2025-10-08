<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDiskSnapshot;

trait CreateDiskSnapshotTrait
{
    /**
     * @param CreateDiskSnapshotRequest $args
     * @return CreateDiskSnapshotResponse
     */
    public function createDiskSnapshot(CreateDiskSnapshotRequest $args)
    {
        $result = parent::createDiskSnapshot($args->toArray());
        return new CreateDiskSnapshotResponse($result->toArray());
    }
}
