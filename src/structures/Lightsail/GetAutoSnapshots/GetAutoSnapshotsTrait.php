<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots;

trait GetAutoSnapshotsTrait
{
    /**
     * @param GetAutoSnapshotsRequest $args
     * @return GetAutoSnapshotsResponse
     */
    public function getAutoSnapshots(GetAutoSnapshotsRequest $args)
    {
        $result = parent::getAutoSnapshots($args->toArray());
        return new GetAutoSnapshotsResponse($result->toArray());
    }
}
