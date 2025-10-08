<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedUserPolicies;

trait ListAttachedUserPoliciesTrait
{
    /**
     * @param ListAttachedUserPoliciesRequest $args
     * @return ListAttachedUserPoliciesResponse
     */
    public function listAttachedUserPolicies(ListAttachedUserPoliciesRequest $args)
    {
        $result = parent::listAttachedUserPolicies($args->toArray());
        return new ListAttachedUserPoliciesResponse($result->toArray());
    }
}
