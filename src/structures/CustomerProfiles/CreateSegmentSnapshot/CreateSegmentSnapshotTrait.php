<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentSnapshot;

trait CreateSegmentSnapshotTrait
{
    /**
     * @param CreateSegmentSnapshotRequest $args
     * @return CreateSegmentSnapshotResponse
     */
    public function createSegmentSnapshot(CreateSegmentSnapshotRequest $args)
    {
        $result = parent::createSegmentSnapshot($args->toArray());
        return new CreateSegmentSnapshotResponse($result->toArray());
    }
}
