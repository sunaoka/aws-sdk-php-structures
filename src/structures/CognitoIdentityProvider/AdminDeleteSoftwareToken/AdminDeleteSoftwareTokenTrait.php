<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteSoftwareToken;

trait AdminDeleteSoftwareTokenTrait
{
    /**
     * @param AdminDeleteSoftwareTokenRequest $args
     * @return AdminDeleteSoftwareTokenResponse
     */
    public function adminDeleteSoftwareToken(AdminDeleteSoftwareTokenRequest $args)
    {
        $result = parent::adminDeleteSoftwareToken($args->toArray());
        return new AdminDeleteSoftwareTokenResponse($result->toArray());
    }
}
