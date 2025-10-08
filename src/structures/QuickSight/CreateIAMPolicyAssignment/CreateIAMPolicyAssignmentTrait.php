<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateIAMPolicyAssignment;

trait CreateIAMPolicyAssignmentTrait
{
    /**
     * @param CreateIAMPolicyAssignmentRequest $args
     * @return CreateIAMPolicyAssignmentResponse
     */
    public function createIAMPolicyAssignment(CreateIAMPolicyAssignmentRequest $args)
    {
        $result = parent::createIAMPolicyAssignment($args->toArray());
        return new CreateIAMPolicyAssignmentResponse($result->toArray());
    }
}
