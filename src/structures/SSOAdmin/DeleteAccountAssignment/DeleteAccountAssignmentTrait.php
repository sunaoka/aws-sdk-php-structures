<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteAccountAssignment;

trait DeleteAccountAssignmentTrait
{
    /**
     * @param DeleteAccountAssignmentRequest $args
     * @return DeleteAccountAssignmentResponse
     */
    public function deleteAccountAssignment(DeleteAccountAssignmentRequest $args)
    {
        $result = parent::deleteAccountAssignment($args->toArray());
        return new DeleteAccountAssignmentResponse($result->toArray());
    }
}
