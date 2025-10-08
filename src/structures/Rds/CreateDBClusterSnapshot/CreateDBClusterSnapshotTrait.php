<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterSnapshot;

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
