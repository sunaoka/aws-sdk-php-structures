<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLockedSnapshots;

trait DescribeLockedSnapshotsTrait
{
    /**
     * @param DescribeLockedSnapshotsRequest $args
     * @return DescribeLockedSnapshotsResponse
     */
    public function describeLockedSnapshots(DescribeLockedSnapshotsRequest $args)
    {
        $result = parent::describeLockedSnapshots($args->toArray());
        return new DescribeLockedSnapshotsResponse($result->toArray());
    }
}
