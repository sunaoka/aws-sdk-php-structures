<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSnapshot;

trait GetSegmentSnapshotTrait
{
    /**
     * @param GetSegmentSnapshotRequest $args
     * @return GetSegmentSnapshotResponse
     */
    public function getSegmentSnapshot(GetSegmentSnapshotRequest $args)
    {
        $result = parent::getSegmentSnapshot($args->toArray());
        return new GetSegmentSnapshotResponse($result->toArray());
    }
}
