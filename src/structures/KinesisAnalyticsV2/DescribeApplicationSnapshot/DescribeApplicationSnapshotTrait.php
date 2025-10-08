<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationSnapshot;

trait DescribeApplicationSnapshotTrait
{
    /**
     * @param DescribeApplicationSnapshotRequest $args
     * @return DescribeApplicationSnapshotResponse
     */
    public function describeApplicationSnapshot(DescribeApplicationSnapshotRequest $args)
    {
        $result = parent::describeApplicationSnapshot($args->toArray());
        return new DescribeApplicationSnapshotResponse($result->toArray());
    }
}
