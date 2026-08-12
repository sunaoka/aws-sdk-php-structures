<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateApprovalPolicy;

trait UpdateApprovalPolicyTrait
{
    /**
     * @param UpdateApprovalPolicyRequest $args
     * @return UpdateApprovalPolicyResponse
     */
    public function updateApprovalPolicy(UpdateApprovalPolicyRequest $args)
    {
        $result = parent::updateApprovalPolicy($args->toArray());
        return new UpdateApprovalPolicyResponse($result->toArray());
    }
}
