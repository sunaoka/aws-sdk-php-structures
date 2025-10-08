<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotAttributes;

trait DescribeDBSnapshotAttributesTrait
{
    /**
     * @param DescribeDBSnapshotAttributesRequest $args
     * @return DescribeDBSnapshotAttributesResponse
     */
    public function describeDBSnapshotAttributes(DescribeDBSnapshotAttributesRequest $args)
    {
        $result = parent::describeDBSnapshotAttributes($args->toArray());
        return new DescribeDBSnapshotAttributesResponse($result->toArray());
    }
}
