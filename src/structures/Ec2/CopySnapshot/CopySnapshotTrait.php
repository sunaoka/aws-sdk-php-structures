<?php

namespace Sunaoka\Aws\Structures\Ec2\CopySnapshot;

trait CopySnapshotTrait
{
    /**
     * @param CopySnapshotRequest $args
     * @return CopySnapshotResponse
     */
    public function copySnapshot(CopySnapshotRequest $args)
    {
        $result = parent::copySnapshot($args->toArray());
        return new CopySnapshotResponse($result->toArray());
    }
}
