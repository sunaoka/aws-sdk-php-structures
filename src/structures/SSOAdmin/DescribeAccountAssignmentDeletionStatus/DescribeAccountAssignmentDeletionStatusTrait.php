<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentDeletionStatus;

trait DescribeAccountAssignmentDeletionStatusTrait
{
    /**
     * @param DescribeAccountAssignmentDeletionStatusRequest $args
     * @return DescribeAccountAssignmentDeletionStatusResponse
     */
    public function describeAccountAssignmentDeletionStatus(DescribeAccountAssignmentDeletionStatusRequest $args)
    {
        $result = parent::describeAccountAssignmentDeletionStatus($args->toArray());
        return new DescribeAccountAssignmentDeletionStatusResponse($result->toArray());
    }
}
