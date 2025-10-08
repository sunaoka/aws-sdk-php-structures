<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSnapshotSchedule;

trait UpdateSnapshotScheduleTrait
{
    /**
     * @param UpdateSnapshotScheduleRequest $args
     * @return UpdateSnapshotScheduleResponse
     */
    public function updateSnapshotSchedule(UpdateSnapshotScheduleRequest $args)
    {
        $result = parent::updateSnapshotSchedule($args->toArray());
        return new UpdateSnapshotScheduleResponse($result->toArray());
    }
}
