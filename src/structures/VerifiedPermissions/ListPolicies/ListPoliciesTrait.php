<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies;

trait ListPoliciesTrait
{
    /**
     * @param ListPoliciesRequest $args
     * @return ListPoliciesResponse
     */
    public function listPolicies(ListPoliciesRequest $args)
    {
        $result = parent::listPolicies($args->toArray());
        return new ListPoliciesResponse($result->toArray());
    }
}
