<?php

namespace Sunaoka\Aws\Structures\Ses\ListIdentityPolicies;

trait ListIdentityPoliciesTrait
{
    /**
     * @param ListIdentityPoliciesRequest $args
     * @return ListIdentityPoliciesResponse
     */
    public function listIdentityPolicies(ListIdentityPoliciesRequest $args)
    {
        $result = parent::listIdentityPolicies($args->toArray());
        return new ListIdentityPoliciesResponse($result->toArray());
    }
}
