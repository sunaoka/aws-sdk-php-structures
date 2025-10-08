<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSnapshot;

trait DeleteDBSnapshotTrait
{
    /**
     * @param DeleteDBSnapshotRequest $args
     * @return DeleteDBSnapshotResponse
     */
    public function deleteDBSnapshot(DeleteDBSnapshotRequest $args)
    {
        $result = parent::deleteDBSnapshot($args->toArray());
        return new DeleteDBSnapshotResponse($result->toArray());
    }
}
