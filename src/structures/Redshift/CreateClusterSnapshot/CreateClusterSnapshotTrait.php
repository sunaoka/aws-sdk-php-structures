<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSnapshot;

trait CreateClusterSnapshotTrait
{
    /**
     * @param CreateClusterSnapshotRequest $args
     * @return CreateClusterSnapshotResponse
     */
    public function createClusterSnapshot(CreateClusterSnapshotRequest $args)
    {
        $result = parent::createClusterSnapshot($args->toArray());
        return new CreateClusterSnapshotResponse($result->toArray());
    }
}
