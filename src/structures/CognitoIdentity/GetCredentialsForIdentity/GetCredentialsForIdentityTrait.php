<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetCredentialsForIdentity;

trait GetCredentialsForIdentityTrait
{
    /**
     * @param GetCredentialsForIdentityRequest $args
     * @return GetCredentialsForIdentityResponse
     */
    public function getCredentialsForIdentity(GetCredentialsForIdentityRequest $args)
    {
        $result = parent::getCredentialsForIdentity($args->toArray());
        return new GetCredentialsForIdentityResponse($result->toArray());
    }
}
