<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

trait GetResourceSnapshotTrait
{
    /**
     * @param GetResourceSnapshotRequest $args
     * @return GetResourceSnapshotResponse
     */
    public function getResourceSnapshot(GetResourceSnapshotRequest $args)
    {
        $result = parent::getResourceSnapshot($args->toArray());
        return new GetResourceSnapshotResponse($result->toArray());
    }
}
