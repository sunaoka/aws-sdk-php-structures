<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotCopyGrants;

trait DescribeSnapshotCopyGrantsTrait
{
    /**
     * @param DescribeSnapshotCopyGrantsRequest $args
     * @return DescribeSnapshotCopyGrantsResponse
     */
    public function describeSnapshotCopyGrants(DescribeSnapshotCopyGrantsRequest $args)
    {
        $result = parent::describeSnapshotCopyGrants($args->toArray());
        return new DescribeSnapshotCopyGrantsResponse($result->toArray());
    }
}
