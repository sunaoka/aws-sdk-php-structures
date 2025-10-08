<?php

namespace Sunaoka\Aws\Structures\MTurk\RejectAssignment;

trait RejectAssignmentTrait
{
    /**
     * @param RejectAssignmentRequest $args
     * @return RejectAssignmentResponse
     */
    public function rejectAssignment(RejectAssignmentRequest $args)
    {
        $result = parent::rejectAssignment($args->toArray());
        return new RejectAssignmentResponse($result->toArray());
    }
}
