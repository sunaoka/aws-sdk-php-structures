<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\VerifySoftwareToken;

trait VerifySoftwareTokenTrait
{
    /**
     * @param VerifySoftwareTokenRequest $args
     * @return VerifySoftwareTokenResponse
     */
    public function verifySoftwareToken(VerifySoftwareTokenRequest $args)
    {
        $result = parent::verifySoftwareToken($args->toArray());
        return new VerifySoftwareTokenResponse($result->toArray());
    }
}
