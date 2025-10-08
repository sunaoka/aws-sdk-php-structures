<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteSnapshotSchedule;

trait DeleteSnapshotScheduleTrait
{
    /**
     * @param DeleteSnapshotScheduleRequest $args
     * @return void
     */
    public function deleteSnapshotSchedule(DeleteSnapshotScheduleRequest $args)
    {
        parent::deleteSnapshotSchedule($args->toArray());
    }
}
