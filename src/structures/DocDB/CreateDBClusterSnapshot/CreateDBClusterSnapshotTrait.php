<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateDBClusterSnapshot;

trait CreateDBClusterSnapshotTrait
{
    /**
     * @param CreateDBClusterSnapshotRequest $args
     * @return CreateDBClusterSnapshotResponse
     */
    public function createDBClusterSnapshot(CreateDBClusterSnapshotRequest $args)
    {
        $result = parent::createDBClusterSnapshot($args->toArray());
        return new CreateDBClusterSnapshotResponse($result->toArray());
    }
}
