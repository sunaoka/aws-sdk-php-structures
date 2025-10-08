<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\DeleteClusterSnapshot;

trait DeleteClusterSnapshotTrait
{
    /**
     * @param DeleteClusterSnapshotRequest $args
     * @return DeleteClusterSnapshotResponse
     */
    public function deleteClusterSnapshot(DeleteClusterSnapshotRequest $args)
    {
        $result = parent::deleteClusterSnapshot($args->toArray());
        return new DeleteClusterSnapshotResponse($result->toArray());
    }
}
