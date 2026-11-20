<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListCIMDPolicies;

trait ListCIMDPoliciesTrait
{
    /**
     * @param ListCIMDPoliciesRequest $args
     * @return ListCIMDPoliciesResponse
     */
    public function listCIMDPolicies(ListCIMDPoliciesRequest $args)
    {
        $result = parent::listCIMDPolicies($args->toArray());
        return new ListCIMDPoliciesResponse($result->toArray());
    }
}
