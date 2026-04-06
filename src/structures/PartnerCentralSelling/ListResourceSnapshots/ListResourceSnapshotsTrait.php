<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots;

trait ListResourceSnapshotsTrait
{
    /**
     * @param ListResourceSnapshotsRequest $args
     * @return ListResourceSnapshotsResponse
     */
    public function listResourceSnapshots(ListResourceSnapshotsRequest $args)
    {
        $result = parent::listResourceSnapshots($args->toArray());
        return new ListResourceSnapshotsResponse($result->toArray());
    }
}
