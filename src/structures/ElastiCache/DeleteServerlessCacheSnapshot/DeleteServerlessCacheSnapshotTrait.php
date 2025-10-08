<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteServerlessCacheSnapshot;

trait DeleteServerlessCacheSnapshotTrait
{
    /**
     * @param DeleteServerlessCacheSnapshotRequest $args
     * @return DeleteServerlessCacheSnapshotResponse
     */
    public function deleteServerlessCacheSnapshot(DeleteServerlessCacheSnapshotRequest $args)
    {
        $result = parent::deleteServerlessCacheSnapshot($args->toArray());
        return new DeleteServerlessCacheSnapshotResponse($result->toArray());
    }
}
