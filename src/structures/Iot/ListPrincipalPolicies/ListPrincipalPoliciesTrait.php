<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalPolicies;

trait ListPrincipalPoliciesTrait
{
    /**
     * @param ListPrincipalPoliciesRequest $args
     * @return ListPrincipalPoliciesResponse
     */
    public function listPrincipalPolicies(ListPrincipalPoliciesRequest $args)
    {
        $result = parent::listPrincipalPolicies($args->toArray());
        return new ListPrincipalPoliciesResponse($result->toArray());
    }
}
