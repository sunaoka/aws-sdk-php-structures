<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListApprovalPolicies;

trait ListApprovalPoliciesTrait
{
    /**
     * @param ListApprovalPoliciesRequest $args
     * @return ListApprovalPoliciesResponse
     */
    public function listApprovalPolicies(ListApprovalPoliciesRequest $args)
    {
        $result = parent::listApprovalPolicies($args->toArray());
        return new ListApprovalPoliciesResponse($result->toArray());
    }
}
