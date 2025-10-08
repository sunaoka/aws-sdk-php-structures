<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentDeletionStatus;

trait ListAccountAssignmentDeletionStatusTrait
{
    /**
     * @param ListAccountAssignmentDeletionStatusRequest $args
     * @return ListAccountAssignmentDeletionStatusResponse
     */
    public function listAccountAssignmentDeletionStatus(ListAccountAssignmentDeletionStatusRequest $args)
    {
        $result = parent::listAccountAssignmentDeletionStatus($args->toArray());
        return new ListAccountAssignmentDeletionStatusResponse($result->toArray());
    }
}
