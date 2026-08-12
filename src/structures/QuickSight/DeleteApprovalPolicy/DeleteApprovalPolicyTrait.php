<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteApprovalPolicy;

trait DeleteApprovalPolicyTrait
{
    /**
     * @param DeleteApprovalPolicyRequest $args
     * @return DeleteApprovalPolicyResponse
     */
    public function deleteApprovalPolicy(DeleteApprovalPolicyRequest $args)
    {
        $result = parent::deleteApprovalPolicy($args->toArray());
        return new DeleteApprovalPolicyResponse($result->toArray());
    }
}
