<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteSnapshotSchedule;

trait DeleteSnapshotScheduleTrait
{
    /**
     * @param DeleteSnapshotScheduleRequest $args
     * @return DeleteSnapshotScheduleResponse
     */
    public function deleteSnapshotSchedule(DeleteSnapshotScheduleRequest $args)
    {
        $result = parent::deleteSnapshotSchedule($args->toArray());
        return new DeleteSnapshotScheduleResponse($result->toArray());
    }
}
