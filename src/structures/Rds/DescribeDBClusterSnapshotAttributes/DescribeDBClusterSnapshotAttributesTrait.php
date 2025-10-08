<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterSnapshotAttributes;

trait DescribeDBClusterSnapshotAttributesTrait
{
    /**
     * @param DescribeDBClusterSnapshotAttributesRequest $args
     * @return DescribeDBClusterSnapshotAttributesResponse
     */
    public function describeDBClusterSnapshotAttributes(DescribeDBClusterSnapshotAttributesRequest $args)
    {
        $result = parent::describeDBClusterSnapshotAttributes($args->toArray());
        return new DescribeDBClusterSnapshotAttributesResponse($result->toArray());
    }
}
