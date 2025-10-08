<?php

namespace Sunaoka\Aws\Structures\Iam\ListRolePolicies;

trait ListRolePoliciesTrait
{
    /**
     * @param ListRolePoliciesRequest $args
     * @return ListRolePoliciesResponse
     */
    public function listRolePolicies(ListRolePoliciesRequest $args)
    {
        $result = parent::listRolePolicies($args->toArray());
        return new ListRolePoliciesResponse($result->toArray());
    }
}
