<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIAMPolicyAssignment;

trait UpdateIAMPolicyAssignmentTrait
{
    /**
     * @param UpdateIAMPolicyAssignmentRequest $args
     * @return UpdateIAMPolicyAssignmentResponse
     */
    public function updateIAMPolicyAssignment(UpdateIAMPolicyAssignmentRequest $args)
    {
        $result = parent::updateIAMPolicyAssignment($args->toArray());
        return new UpdateIAMPolicyAssignmentResponse($result->toArray());
    }
}
