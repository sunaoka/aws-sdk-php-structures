<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusterSnapshots;

trait DescribeDBClusterSnapshotsTrait
{
    /**
     * @param DescribeDBClusterSnapshotsRequest $args
     * @return DescribeDBClusterSnapshotsResponse
     */
    public function describeDBClusterSnapshots(DescribeDBClusterSnapshotsRequest $args)
    {
        $result = parent::describeDBClusterSnapshots($args->toArray());
        return new DescribeDBClusterSnapshotsResponse($result->toArray());
    }
}
