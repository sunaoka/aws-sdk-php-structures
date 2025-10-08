<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetOpenIdTokenForDeveloperIdentity;

trait GetOpenIdTokenForDeveloperIdentityTrait
{
    /**
     * @param GetOpenIdTokenForDeveloperIdentityRequest $args
     * @return GetOpenIdTokenForDeveloperIdentityResponse
     */
    public function getOpenIdTokenForDeveloperIdentity(GetOpenIdTokenForDeveloperIdentityRequest $args)
    {
        $result = parent::getOpenIdTokenForDeveloperIdentity($args->toArray());
        return new GetOpenIdTokenForDeveloperIdentityResponse($result->toArray());
    }
}
