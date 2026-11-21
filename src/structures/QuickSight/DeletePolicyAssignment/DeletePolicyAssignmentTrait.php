<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeletePolicyAssignment;

trait DeletePolicyAssignmentTrait
{
    /**
     * @param DeletePolicyAssignmentRequest $args
     * @return DeletePolicyAssignmentResponse
     */
    public function deletePolicyAssignment(DeletePolicyAssignmentRequest $args)
    {
        $result = parent::deletePolicyAssignment($args->toArray());
        return new DeletePolicyAssignmentResponse($result->toArray());
    }
}
