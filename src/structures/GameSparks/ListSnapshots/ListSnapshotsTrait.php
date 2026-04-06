<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListSnapshots;

trait ListSnapshotsTrait
{
    /**
     * @param ListSnapshotsRequest $args
     * @return ListSnapshotsResponse
     */
    public function listSnapshots(ListSnapshotsRequest $args)
    {
        $result = parent::listSnapshots($args->toArray());
        return new ListSnapshotsResponse($result->toArray());
    }
}
