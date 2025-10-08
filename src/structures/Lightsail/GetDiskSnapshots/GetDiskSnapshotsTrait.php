<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshots;

trait GetDiskSnapshotsTrait
{
    /**
     * @param GetDiskSnapshotsRequest $args
     * @return GetDiskSnapshotsResponse
     */
    public function getDiskSnapshots(GetDiskSnapshotsRequest $args)
    {
        $result = parent::getDiskSnapshots($args->toArray());
        return new GetDiskSnapshotsResponse($result->toArray());
    }
}
