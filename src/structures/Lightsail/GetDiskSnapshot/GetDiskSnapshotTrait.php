<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshot;

trait GetDiskSnapshotTrait
{
    /**
     * @param GetDiskSnapshotRequest $args
     * @return GetDiskSnapshotResponse
     */
    public function getDiskSnapshot(GetDiskSnapshotRequest $args)
    {
        $result = parent::getDiskSnapshot($args->toArray());
        return new GetDiskSnapshotResponse($result->toArray());
    }
}
