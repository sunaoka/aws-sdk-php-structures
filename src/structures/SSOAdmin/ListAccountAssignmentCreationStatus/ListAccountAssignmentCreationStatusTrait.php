<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentCreationStatus;

trait ListAccountAssignmentCreationStatusTrait
{
    /**
     * @param ListAccountAssignmentCreationStatusRequest $args
     * @return ListAccountAssignmentCreationStatusResponse
     */
    public function listAccountAssignmentCreationStatus(ListAccountAssignmentCreationStatusRequest $args)
    {
        $result = parent::listAccountAssignmentCreationStatus($args->toArray());
        return new ListAccountAssignmentCreationStatusResponse($result->toArray());
    }
}
