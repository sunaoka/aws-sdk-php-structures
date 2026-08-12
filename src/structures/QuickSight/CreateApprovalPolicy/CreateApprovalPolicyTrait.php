<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateApprovalPolicy;

trait CreateApprovalPolicyTrait
{
    /**
     * @param CreateApprovalPolicyRequest $args
     * @return CreateApprovalPolicyResponse
     */
    public function createApprovalPolicy(CreateApprovalPolicyRequest $args)
    {
        $result = parent::createApprovalPolicy($args->toArray());
        return new CreateApprovalPolicyResponse($result->toArray());
    }
}
