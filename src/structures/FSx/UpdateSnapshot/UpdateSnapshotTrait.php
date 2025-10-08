<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshot;

trait UpdateSnapshotTrait
{
    /**
     * @param UpdateSnapshotRequest $args
     * @return UpdateSnapshotResponse
     */
    public function updateSnapshot(UpdateSnapshotRequest $args)
    {
        $result = parent::updateSnapshot($args->toArray());
        return new UpdateSnapshotResponse($result->toArray());
    }
}
