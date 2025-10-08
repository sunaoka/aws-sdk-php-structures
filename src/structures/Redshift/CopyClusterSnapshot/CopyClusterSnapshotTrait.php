<?php

namespace Sunaoka\Aws\Structures\Redshift\CopyClusterSnapshot;

trait CopyClusterSnapshotTrait
{
    /**
     * @param CopyClusterSnapshotRequest $args
     * @return CopyClusterSnapshotResponse
     */
    public function copyClusterSnapshot(CopyClusterSnapshotRequest $args)
    {
        $result = parent::copyClusterSnapshot($args->toArray());
        return new CopyClusterSnapshotResponse($result->toArray());
    }
}
