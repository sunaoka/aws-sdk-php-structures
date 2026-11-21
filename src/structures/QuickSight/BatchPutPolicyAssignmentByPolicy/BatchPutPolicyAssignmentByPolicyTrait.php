<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchPutPolicyAssignmentByPolicy;

trait BatchPutPolicyAssignmentByPolicyTrait
{
    /**
     * @param BatchPutPolicyAssignmentByPolicyRequest $args
     * @return BatchPutPolicyAssignmentByPolicyResponse
     */
    public function batchPutPolicyAssignmentByPolicy(BatchPutPolicyAssignmentByPolicyRequest $args)
    {
        $result = parent::batchPutPolicyAssignmentByPolicy($args->toArray());
        return new BatchPutPolicyAssignmentByPolicyResponse($result->toArray());
    }
}
