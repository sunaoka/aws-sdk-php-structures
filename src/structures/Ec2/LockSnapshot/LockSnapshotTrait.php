<?php

namespace Sunaoka\Aws\Structures\Ec2\LockSnapshot;

trait LockSnapshotTrait
{
    /**
     * @param LockSnapshotRequest $args
     * @return LockSnapshotResponse
     */
    public function lockSnapshot(LockSnapshotRequest $args)
    {
        $result = parent::lockSnapshot($args->toArray());
        return new LockSnapshotResponse($result->toArray());
    }
}
