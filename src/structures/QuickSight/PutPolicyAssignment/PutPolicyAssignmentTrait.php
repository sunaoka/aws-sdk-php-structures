<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutPolicyAssignment;

trait PutPolicyAssignmentTrait
{
    /**
     * @param PutPolicyAssignmentRequest $args
     * @return PutPolicyAssignmentResponse
     */
    public function putPolicyAssignment(PutPolicyAssignmentRequest $args)
    {
        $result = parent::putPolicyAssignment($args->toArray());
        return new PutPolicyAssignmentResponse($result->toArray());
    }
}
