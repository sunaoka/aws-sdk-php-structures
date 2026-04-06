<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSnapshot;

trait GetGraphSnapshotTrait
{
    /**
     * @param GetGraphSnapshotRequest $args
     * @return GetGraphSnapshotResponse
     */
    public function getGraphSnapshot(GetGraphSnapshotRequest $args)
    {
        $result = parent::getGraphSnapshot($args->toArray());
        return new GetGraphSnapshotResponse($result->toArray());
    }
}
