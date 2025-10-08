<?php

namespace Sunaoka\Aws\Structures\MTurk\ApproveAssignment;

trait ApproveAssignmentTrait
{
    /**
     * @param ApproveAssignmentRequest $args
     * @return ApproveAssignmentResponse
     */
    public function approveAssignment(ApproveAssignmentRequest $args)
    {
        $result = parent::approveAssignment($args->toArray());
        return new ApproveAssignmentResponse($result->toArray());
    }
}
