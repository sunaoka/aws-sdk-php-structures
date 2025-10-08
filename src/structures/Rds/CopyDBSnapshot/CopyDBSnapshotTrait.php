<?php

namespace Sunaoka\Aws\Structures\Rds\CopyDBSnapshot;

trait CopyDBSnapshotTrait
{
    /**
     * @param CopyDBSnapshotRequest $args
     * @return CopyDBSnapshotResponse
     */
    public function copyDBSnapshot(CopyDBSnapshotRequest $args)
    {
        $result = parent::copyDBSnapshot($args->toArray());
        return new CopyDBSnapshotResponse($result->toArray());
    }
}
