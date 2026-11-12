<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshotOperation;

trait DescribeSnapshotOperationTrait
{
    /**
     * @param DescribeSnapshotOperationRequest $args
     * @return DescribeSnapshotOperationResponse
     */
    public function describeSnapshotOperation(DescribeSnapshotOperationRequest $args)
    {
        $result = parent::describeSnapshotOperation($args->toArray());
        return new DescribeSnapshotOperationResponse($result->toArray());
    }
}
