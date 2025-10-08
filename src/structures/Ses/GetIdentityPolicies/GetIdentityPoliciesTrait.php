<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityPolicies;

trait GetIdentityPoliciesTrait
{
    /**
     * @param GetIdentityPoliciesRequest $args
     * @return GetIdentityPoliciesResponse
     */
    public function getIdentityPolicies(GetIdentityPoliciesRequest $args)
    {
        $result = parent::getIdentityPolicies($args->toArray());
        return new GetIdentityPoliciesResponse($result->toArray());
    }
}
