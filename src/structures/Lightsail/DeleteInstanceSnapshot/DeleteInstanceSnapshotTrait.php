<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteInstanceSnapshot;

trait DeleteInstanceSnapshotTrait
{
    /**
     * @param DeleteInstanceSnapshotRequest $args
     * @return DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshot(DeleteInstanceSnapshotRequest $args)
    {
        $result = parent::deleteInstanceSnapshot($args->toArray());
        return new DeleteInstanceSnapshotResponse($result->toArray());
    }
}
