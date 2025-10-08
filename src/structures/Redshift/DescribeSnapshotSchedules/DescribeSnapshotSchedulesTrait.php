<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules;

trait DescribeSnapshotSchedulesTrait
{
    /**
     * @param DescribeSnapshotSchedulesRequest $args
     * @return DescribeSnapshotSchedulesResponse
     */
    public function describeSnapshotSchedules(DescribeSnapshotSchedulesRequest $args)
    {
        $result = parent::describeSnapshotSchedules($args->toArray());
        return new DescribeSnapshotSchedulesResponse($result->toArray());
    }
}
