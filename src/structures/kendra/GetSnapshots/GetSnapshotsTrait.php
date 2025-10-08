<?php

namespace Sunaoka\Aws\Structures\kendra\GetSnapshots;

trait GetSnapshotsTrait
{
    /**
     * @param GetSnapshotsRequest $args
     * @return GetSnapshotsResponse
     */
    public function getSnapshots(GetSnapshotsRequest $args)
    {
        $result = parent::getSnapshots($args->toArray());
        return new GetSnapshotsResponse($result->toArray());
    }
}
