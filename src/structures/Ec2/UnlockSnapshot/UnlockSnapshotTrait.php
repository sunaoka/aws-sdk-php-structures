<?php

namespace Sunaoka\Aws\Structures\Ec2\UnlockSnapshot;

trait UnlockSnapshotTrait
{
    /**
     * @param UnlockSnapshotRequest $args
     * @return UnlockSnapshotResponse
     */
    public function unlockSnapshot(UnlockSnapshotRequest $args)
    {
        $result = parent::unlockSnapshot($args->toArray());
        return new UnlockSnapshotResponse($result->toArray());
    }
}
