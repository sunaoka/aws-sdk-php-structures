<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplicationAssignment;

trait DescribeApplicationAssignmentTrait
{
    /**
     * @param DescribeApplicationAssignmentRequest $args
     * @return DescribeApplicationAssignmentResponse
     */
    public function describeApplicationAssignment(DescribeApplicationAssignmentRequest $args)
    {
        $result = parent::describeApplicationAssignment($args->toArray());
        return new DescribeApplicationAssignmentResponse($result->toArray());
    }
}
