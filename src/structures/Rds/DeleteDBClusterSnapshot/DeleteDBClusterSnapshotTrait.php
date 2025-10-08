<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterSnapshot;

trait DeleteDBClusterSnapshotTrait
{
    /**
     * @param DeleteDBClusterSnapshotRequest $args
     * @return DeleteDBClusterSnapshotResponse
     */
    public function deleteDBClusterSnapshot(DeleteDBClusterSnapshotRequest $args)
    {
        $result = parent::deleteDBClusterSnapshot($args->toArray());
        return new DeleteDBClusterSnapshotResponse($result->toArray());
    }
}
