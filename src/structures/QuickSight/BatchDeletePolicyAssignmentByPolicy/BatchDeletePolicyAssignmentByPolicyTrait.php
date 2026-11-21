<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeletePolicyAssignmentByPolicy;

trait BatchDeletePolicyAssignmentByPolicyTrait
{
    /**
     * @param BatchDeletePolicyAssignmentByPolicyRequest $args
     * @return BatchDeletePolicyAssignmentByPolicyResponse
     */
    public function batchDeletePolicyAssignmentByPolicy(BatchDeletePolicyAssignmentByPolicyRequest $args)
    {
        $result = parent::batchDeletePolicyAssignmentByPolicy($args->toArray());
        return new BatchDeletePolicyAssignmentByPolicyResponse($result->toArray());
    }
}
