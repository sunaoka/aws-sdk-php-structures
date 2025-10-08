<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteIAMPolicyAssignment;

trait DeleteIAMPolicyAssignmentTrait
{
    /**
     * @param DeleteIAMPolicyAssignmentRequest $args
     * @return DeleteIAMPolicyAssignmentResponse
     */
    public function deleteIAMPolicyAssignment(DeleteIAMPolicyAssignmentRequest $args)
    {
        $result = parent::deleteIAMPolicyAssignment($args->toArray());
        return new DeleteIAMPolicyAssignmentResponse($result->toArray());
    }
}
