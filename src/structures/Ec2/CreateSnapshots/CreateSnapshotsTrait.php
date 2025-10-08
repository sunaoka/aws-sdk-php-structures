<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshots;

trait CreateSnapshotsTrait
{
    /**
     * @param CreateSnapshotsRequest $args
     * @return CreateSnapshotsResponse
     */
    public function createSnapshots(CreateSnapshotsRequest $args)
    {
        $result = parent::createSnapshots($args->toArray());
        return new CreateSnapshotsResponse($result->toArray());
    }
}
