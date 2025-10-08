<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationSnapshot;

trait DeleteApplicationSnapshotTrait
{
    /**
     * @param DeleteApplicationSnapshotRequest $args
     * @return DeleteApplicationSnapshotResponse
     */
    public function deleteApplicationSnapshot(DeleteApplicationSnapshotRequest $args)
    {
        $result = parent::deleteApplicationSnapshot($args->toArray());
        return new DeleteApplicationSnapshotResponse($result->toArray());
    }
}
