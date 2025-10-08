<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCacheSnapshots;

trait DescribeServerlessCacheSnapshotsTrait
{
    /**
     * @param DescribeServerlessCacheSnapshotsRequest $args
     * @return DescribeServerlessCacheSnapshotsResponse
     */
    public function describeServerlessCacheSnapshots(DescribeServerlessCacheSnapshotsRequest $args)
    {
        $result = parent::describeServerlessCacheSnapshots($args->toArray());
        return new DescribeServerlessCacheSnapshotsResponse($result->toArray());
    }
}
