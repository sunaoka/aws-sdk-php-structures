<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotSchedule;

trait CreateSnapshotScheduleTrait
{
    /**
     * @param CreateSnapshotScheduleRequest $args
     * @return CreateSnapshotScheduleResponse
     */
    public function createSnapshotSchedule(CreateSnapshotScheduleRequest $args)
    {
        $result = parent::createSnapshotSchedule($args->toArray());
        return new CreateSnapshotScheduleResponse($result->toArray());
    }
}
