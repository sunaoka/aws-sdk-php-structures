<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshotSchedule;

trait ModifyClusterSnapshotScheduleTrait
{
    /**
     * @param ModifyClusterSnapshotScheduleRequest $args
     * @return void
     */
    public function modifyClusterSnapshotSchedule(ModifyClusterSnapshotScheduleRequest $args)
    {
        parent::modifyClusterSnapshotSchedule($args->toArray());
    }
}
