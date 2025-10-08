<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshots;

trait DescribeDBSnapshotsTrait
{
    /**
     * @param DescribeDBSnapshotsRequest $args
     * @return DescribeDBSnapshotsResponse
     */
    public function describeDBSnapshots(DescribeDBSnapshotsRequest $args)
    {
        $result = parent::describeDBSnapshots($args->toArray());
        return new DescribeDBSnapshotsResponse($result->toArray());
    }
}
