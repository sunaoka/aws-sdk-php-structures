<?php

namespace Sunaoka\Aws\Structures\EBS\CompleteSnapshot;

trait CompleteSnapshotTrait
{
    /**
     * @param CompleteSnapshotRequest $args
     * @return CompleteSnapshotResponse
     */
    public function completeSnapshot(CompleteSnapshotRequest $args)
    {
        $result = parent::completeSnapshot($args->toArray());
        return new CompleteSnapshotResponse($result->toArray());
    }
}
