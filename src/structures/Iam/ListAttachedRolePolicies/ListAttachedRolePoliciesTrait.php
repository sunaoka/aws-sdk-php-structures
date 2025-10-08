<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedRolePolicies;

trait ListAttachedRolePoliciesTrait
{
    /**
     * @param ListAttachedRolePoliciesRequest $args
     * @return ListAttachedRolePoliciesResponse
     */
    public function listAttachedRolePolicies(ListAttachedRolePoliciesRequest $args)
    {
        $result = parent::listAttachedRolePolicies($args->toArray());
        return new ListAttachedRolePoliciesResponse($result->toArray());
    }
}
