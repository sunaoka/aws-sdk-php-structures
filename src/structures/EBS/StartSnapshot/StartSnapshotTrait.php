<?php

namespace Sunaoka\Aws\Structures\EBS\StartSnapshot;

trait StartSnapshotTrait
{
    /**
     * @param StartSnapshotRequest $args
     * @return StartSnapshotResponse
     */
    public function startSnapshot(StartSnapshotRequest $args)
    {
        $result = parent::startSnapshot($args->toArray());
        return new StartSnapshotResponse($result->toArray());
    }
}
