<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifySnapshotSchedule;

trait ModifySnapshotScheduleTrait
{
    /**
     * @param ModifySnapshotScheduleRequest $args
     * @return ModifySnapshotScheduleResponse
     */
    public function modifySnapshotSchedule(ModifySnapshotScheduleRequest $args)
    {
        $result = parent::modifySnapshotSchedule($args->toArray());
        return new ModifySnapshotScheduleResponse($result->toArray());
    }
}
