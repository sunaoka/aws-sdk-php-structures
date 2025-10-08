<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBClusterSnapshot;

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
