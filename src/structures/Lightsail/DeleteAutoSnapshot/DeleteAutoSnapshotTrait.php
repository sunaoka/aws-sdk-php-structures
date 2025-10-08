<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteAutoSnapshot;

trait DeleteAutoSnapshotTrait
{
    /**
     * @param DeleteAutoSnapshotRequest $args
     * @return DeleteAutoSnapshotResponse
     */
    public function deleteAutoSnapshot(DeleteAutoSnapshotRequest $args)
    {
        $result = parent::deleteAutoSnapshot($args->toArray());
        return new DeleteAutoSnapshotResponse($result->toArray());
    }
}
