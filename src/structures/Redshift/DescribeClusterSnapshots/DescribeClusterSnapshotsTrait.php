<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSnapshots;

trait DescribeClusterSnapshotsTrait
{
    /**
     * @param DescribeClusterSnapshotsRequest $args
     * @return DescribeClusterSnapshotsResponse
     */
    public function describeClusterSnapshots(DescribeClusterSnapshotsRequest $args)
    {
        $result = parent::describeClusterSnapshots($args->toArray());
        return new DescribeClusterSnapshotsResponse($result->toArray());
    }
}
