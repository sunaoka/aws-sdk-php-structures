<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshot;

trait GetInstanceSnapshotTrait
{
    /**
     * @param GetInstanceSnapshotRequest $args
     * @return GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshot(GetInstanceSnapshotRequest $args)
    {
        $result = parent::getInstanceSnapshot($args->toArray());
        return new GetInstanceSnapshotResponse($result->toArray());
    }
}
