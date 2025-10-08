<?php

namespace Sunaoka\Aws\Structures\MTurk\GetAssignment;

trait GetAssignmentTrait
{
    /**
     * @param GetAssignmentRequest $args
     * @return GetAssignmentResponse
     */
    public function getAssignment(GetAssignmentRequest $args)
    {
        $result = parent::getAssignment($args->toArray());
        return new GetAssignmentResponse($result->toArray());
    }
}
