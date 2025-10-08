<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSnapshotAttribute;

trait DescribeSnapshotAttributeTrait
{
    /**
     * @param DescribeSnapshotAttributeRequest $args
     * @return DescribeSnapshotAttributeResponse
     */
    public function describeSnapshotAttribute(DescribeSnapshotAttributeRequest $args)
    {
        $result = parent::describeSnapshotAttribute($args->toArray());
        return new DescribeSnapshotAttributeResponse($result->toArray());
    }
}
