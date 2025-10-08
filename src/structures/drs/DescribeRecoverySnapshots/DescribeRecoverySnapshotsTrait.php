<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoverySnapshots;

trait DescribeRecoverySnapshotsTrait
{
    /**
     * @param DescribeRecoverySnapshotsRequest $args
     * @return DescribeRecoverySnapshotsResponse
     */
    public function describeRecoverySnapshots(DescribeRecoverySnapshotsRequest $args)
    {
        $result = parent::describeRecoverySnapshots($args->toArray());
        return new DescribeRecoverySnapshotsResponse($result->toArray());
    }
}
