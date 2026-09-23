<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListPolicies;

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
