<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSnapshot;

trait CreateDBSnapshotTrait
{
    /**
     * @param CreateDBSnapshotRequest $args
     * @return CreateDBSnapshotResponse
     */
    public function createDBSnapshot(CreateDBSnapshotRequest $args)
    {
        $result = parent::createDBSnapshot($args->toArray());
        return new CreateDBSnapshotResponse($result->toArray());
    }
}
