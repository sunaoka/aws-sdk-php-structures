<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\StartWebAuthnRegistration;

trait StartWebAuthnRegistrationTrait
{
    /**
     * @param StartWebAuthnRegistrationRequest $args
     * @return StartWebAuthnRegistrationResponse
     */
    public function startWebAuthnRegistration(StartWebAuthnRegistrationRequest $args)
    {
        $result = parent::startWebAuthnRegistration($args->toArray());
        return new StartWebAuthnRegistrationResponse($result->toArray());
    }
}
