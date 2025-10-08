<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphSnapshot;

trait CreateGraphSnapshotTrait
{
    /**
     * @param CreateGraphSnapshotRequest $args
     * @return CreateGraphSnapshotResponse
     */
    public function createGraphSnapshot(CreateGraphSnapshotRequest $args)
    {
        $result = parent::createGraphSnapshot($args->toArray());
        return new CreateGraphSnapshotResponse($result->toArray());
    }
}
