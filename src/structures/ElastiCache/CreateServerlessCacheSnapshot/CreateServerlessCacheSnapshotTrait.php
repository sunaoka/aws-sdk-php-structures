<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCacheSnapshot;

trait CreateServerlessCacheSnapshotTrait
{
    /**
     * @param CreateServerlessCacheSnapshotRequest $args
     * @return CreateServerlessCacheSnapshotResponse
     */
    public function createServerlessCacheSnapshot(CreateServerlessCacheSnapshotRequest $args)
    {
        $result = parent::createServerlessCacheSnapshot($args->toArray());
        return new CreateServerlessCacheSnapshotResponse($result->toArray());
    }
}
