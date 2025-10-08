<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\LookupDeveloperIdentity;

trait LookupDeveloperIdentityTrait
{
    /**
     * @param LookupDeveloperIdentityRequest $args
     * @return LookupDeveloperIdentityResponse
     */
    public function lookupDeveloperIdentity(LookupDeveloperIdentityRequest $args)
    {
        $result = parent::lookupDeveloperIdentity($args->toArray());
        return new LookupDeveloperIdentityResponse($result->toArray());
    }
}
