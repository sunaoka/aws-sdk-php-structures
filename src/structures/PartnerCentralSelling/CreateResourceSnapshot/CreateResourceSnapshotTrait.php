<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateResourceSnapshot;

trait CreateResourceSnapshotTrait
{
    /**
     * @param CreateResourceSnapshotRequest $args
     * @return CreateResourceSnapshotResponse
     */
    public function createResourceSnapshot(CreateResourceSnapshotRequest $args)
    {
        $result = parent::createResourceSnapshot($args->toArray());
        return new CreateResourceSnapshotResponse($result->toArray());
    }
}
