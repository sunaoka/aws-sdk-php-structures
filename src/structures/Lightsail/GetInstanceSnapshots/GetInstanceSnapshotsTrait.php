<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshots;

trait GetInstanceSnapshotsTrait
{
    /**
     * @param GetInstanceSnapshotsRequest $args
     * @return GetInstanceSnapshotsResponse
     */
    public function getInstanceSnapshots(GetInstanceSnapshotsRequest $args)
    {
        $result = parent::getInstanceSnapshots($args->toArray());
        return new GetInstanceSnapshotsResponse($result->toArray());
    }
}
