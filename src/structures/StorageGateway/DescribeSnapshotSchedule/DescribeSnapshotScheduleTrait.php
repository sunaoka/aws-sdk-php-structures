<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSnapshotSchedule;

trait DescribeSnapshotScheduleTrait
{
    /**
     * @param DescribeSnapshotScheduleRequest $args
     * @return DescribeSnapshotScheduleResponse
     */
    public function describeSnapshotSchedule(DescribeSnapshotScheduleRequest $args)
    {
        $result = parent::describeSnapshotSchedule($args->toArray());
        return new DescribeSnapshotScheduleResponse($result->toArray());
    }
}
