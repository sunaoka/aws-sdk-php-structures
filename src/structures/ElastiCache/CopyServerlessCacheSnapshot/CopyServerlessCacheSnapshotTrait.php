<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CopyServerlessCacheSnapshot;

trait CopyServerlessCacheSnapshotTrait
{
    /**
     * @param CopyServerlessCacheSnapshotRequest $args
     * @return CopyServerlessCacheSnapshotResponse
     */
    public function copyServerlessCacheSnapshot(CopyServerlessCacheSnapshotRequest $args)
    {
        $result = parent::copyServerlessCacheSnapshot($args->toArray());
        return new CopyServerlessCacheSnapshotResponse($result->toArray());
    }
}
