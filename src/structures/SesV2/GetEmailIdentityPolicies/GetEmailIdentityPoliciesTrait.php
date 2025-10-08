<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailIdentityPolicies;

trait GetEmailIdentityPoliciesTrait
{
    /**
     * @param GetEmailIdentityPoliciesRequest $args
     * @return GetEmailIdentityPoliciesResponse
     */
    public function getEmailIdentityPolicies(GetEmailIdentityPoliciesRequest $args)
    {
        $result = parent::getEmailIdentityPolicies($args->toArray());
        return new GetEmailIdentityPoliciesResponse($result->toArray());
    }
}
