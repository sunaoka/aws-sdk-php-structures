<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapshot;

trait DeleteSnapshotTrait
{
    /**
     * @param DeleteSnapshotRequest $args
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot(DeleteSnapshotRequest $args)
    {
        $result = parent::deleteSnapshot($args->toArray());
        return new DeleteSnapshotResponse($result->toArray());
    }
}
