<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSnapshots;

trait DescribeSnapshotsTrait
{
    /**
     * @param DescribeSnapshotsRequest $args
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots(DescribeSnapshotsRequest $args)
    {
        $result = parent::describeSnapshots($args->toArray());
        return new DescribeSnapshotsResponse($result->toArray());
    }
}
