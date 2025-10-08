<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetClusterSnapshot;

trait GetClusterSnapshotTrait
{
    /**
     * @param GetClusterSnapshotRequest $args
     * @return GetClusterSnapshotResponse
     */
    public function getClusterSnapshot(GetClusterSnapshotRequest $args)
    {
        $result = parent::getClusterSnapshot($args->toArray());
        return new GetClusterSnapshotResponse($result->toArray());
    }
}
