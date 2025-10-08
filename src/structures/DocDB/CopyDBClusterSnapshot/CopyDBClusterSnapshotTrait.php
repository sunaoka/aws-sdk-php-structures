<?php

namespace Sunaoka\Aws\Structures\DocDB\CopyDBClusterSnapshot;

trait CopyDBClusterSnapshotTrait
{
    /**
     * @param CopyDBClusterSnapshotRequest $args
     * @return CopyDBClusterSnapshotResponse
     */
    public function copyDBClusterSnapshot(CopyDBClusterSnapshotRequest $args)
    {
        $result = parent::copyDBClusterSnapshot($args->toArray());
        return new CopyDBClusterSnapshotResponse($result->toArray());
    }
}
