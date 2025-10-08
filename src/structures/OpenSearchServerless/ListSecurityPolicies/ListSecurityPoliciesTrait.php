<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies;

trait ListSecurityPoliciesTrait
{
    /**
     * @param ListSecurityPoliciesRequest $args
     * @return ListSecurityPoliciesResponse
     */
    public function listSecurityPolicies(ListSecurityPoliciesRequest $args)
    {
        $result = parent::listSecurityPolicies($args->toArray());
        return new ListSecurityPoliciesResponse($result->toArray());
    }
}
