<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshot;

trait DescribeSnapshotTrait
{
    /**
     * @param DescribeSnapshotRequest $args
     * @return DescribeSnapshotResponse
     */
    public function describeSnapshot(DescribeSnapshotRequest $args)
    {
        $result = parent::describeSnapshot($args->toArray());
        return new DescribeSnapshotResponse($result->toArray());
    }
}
