<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphSnapshots;

trait ListGraphSnapshotsTrait
{
    /**
     * @param ListGraphSnapshotsRequest $args
     * @return ListGraphSnapshotsResponse
     */
    public function listGraphSnapshots(ListGraphSnapshotsRequest $args)
    {
        $result = parent::listGraphSnapshots($args->toArray());
        return new ListGraphSnapshotsResponse($result->toArray());
    }
}
