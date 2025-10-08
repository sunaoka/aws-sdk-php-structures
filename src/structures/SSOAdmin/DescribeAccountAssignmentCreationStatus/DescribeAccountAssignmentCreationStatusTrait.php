<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeAccountAssignmentCreationStatus;

trait DescribeAccountAssignmentCreationStatusTrait
{
    /**
     * @param DescribeAccountAssignmentCreationStatusRequest $args
     * @return DescribeAccountAssignmentCreationStatusResponse
     */
    public function describeAccountAssignmentCreationStatus(DescribeAccountAssignmentCreationStatusRequest $args)
    {
        $result = parent::describeAccountAssignmentCreationStatus($args->toArray());
        return new DescribeAccountAssignmentCreationStatusResponse($result->toArray());
    }
}
