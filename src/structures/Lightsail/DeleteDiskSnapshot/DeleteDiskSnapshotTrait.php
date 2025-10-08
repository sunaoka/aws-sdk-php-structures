<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDiskSnapshot;

trait DeleteDiskSnapshotTrait
{
    /**
     * @param DeleteDiskSnapshotRequest $args
     * @return DeleteDiskSnapshotResponse
     */
    public function deleteDiskSnapshot(DeleteDiskSnapshotRequest $args)
    {
        $result = parent::deleteDiskSnapshot($args->toArray());
        return new DeleteDiskSnapshotResponse($result->toArray());
    }
}
