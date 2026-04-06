<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot;

trait GetJobQueueSnapshotTrait
{
    /**
     * @param GetJobQueueSnapshotRequest $args
     * @return GetJobQueueSnapshotResponse
     */
    public function getJobQueueSnapshot(GetJobQueueSnapshotRequest $args)
    {
        $result = parent::getJobQueueSnapshot($args->toArray());
        return new GetJobQueueSnapshotResponse($result->toArray());
    }
}
