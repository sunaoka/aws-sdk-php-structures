<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth;

trait AdminInitiateAuthTrait
{
    /**
     * @param AdminInitiateAuthRequest $args
     * @return AdminInitiateAuthResponse
     */
    public function adminInitiateAuth(AdminInitiateAuthRequest $args)
    {
        $result = parent::adminInitiateAuth($args->toArray());
        return new AdminInitiateAuthResponse($result->toArray());
    }
}
