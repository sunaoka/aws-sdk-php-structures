<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeleteGraphSnapshot;

trait DeleteGraphSnapshotTrait
{
    /**
     * @param DeleteGraphSnapshotRequest $args
     * @return DeleteGraphSnapshotResponse
     */
    public function deleteGraphSnapshot(DeleteGraphSnapshotRequest $args)
    {
        $result = parent::deleteGraphSnapshot($args->toArray());
        return new DeleteGraphSnapshotResponse($result->toArray());
    }
}
