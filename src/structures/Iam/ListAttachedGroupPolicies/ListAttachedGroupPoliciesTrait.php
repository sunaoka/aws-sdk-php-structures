<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedGroupPolicies;

trait ListAttachedGroupPoliciesTrait
{
    /**
     * @param ListAttachedGroupPoliciesRequest $args
     * @return ListAttachedGroupPoliciesResponse
     */
    public function listAttachedGroupPolicies(ListAttachedGroupPoliciesRequest $args)
    {
        $result = parent::listAttachedGroupPolicies($args->toArray());
        return new ListAttachedGroupPoliciesResponse($result->toArray());
    }
}
