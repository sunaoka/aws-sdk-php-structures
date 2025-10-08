<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplicationSnapshot;

trait CreateApplicationSnapshotTrait
{
    /**
     * @param CreateApplicationSnapshotRequest $args
     * @return CreateApplicationSnapshotResponse
     */
    public function createApplicationSnapshot(CreateApplicationSnapshotRequest $args)
    {
        $result = parent::createApplicationSnapshot($args->toArray());
        return new CreateApplicationSnapshotResponse($result->toArray());
    }
}
