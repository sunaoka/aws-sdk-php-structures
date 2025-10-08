<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotTierStatus;

trait DescribeSnapshotTierStatusTrait
{
    /**
     * @param DescribeSnapshotTierStatusRequest $args
     * @return DescribeSnapshotTierStatusResponse
     */
    public function describeSnapshotTierStatus(DescribeSnapshotTierStatusRequest $args)
    {
        $result = parent::describeSnapshotTierStatus($args->toArray());
        return new DescribeSnapshotTierStatusResponse($result->toArray());
    }
}
