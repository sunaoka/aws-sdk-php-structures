<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetPolicyAssignment;

trait GetPolicyAssignmentTrait
{
    /**
     * @param GetPolicyAssignmentRequest $args
     * @return GetPolicyAssignmentResponse
     */
    public function getPolicyAssignment(GetPolicyAssignmentRequest $args)
    {
        $result = parent::getPolicyAssignment($args->toArray());
        return new GetPolicyAssignmentResponse($result->toArray());
    }
}
