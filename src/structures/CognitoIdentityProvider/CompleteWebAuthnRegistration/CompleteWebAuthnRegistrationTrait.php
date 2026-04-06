<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CompleteWebAuthnRegistration;

trait CompleteWebAuthnRegistrationTrait
{
    /**
     * @param CompleteWebAuthnRegistrationRequest $args
     * @return CompleteWebAuthnRegistrationResponse
     */
    public function completeWebAuthnRegistration(CompleteWebAuthnRegistrationRequest $args)
    {
        $result = parent::completeWebAuthnRegistration($args->toArray());
        return new CompleteWebAuthnRegistrationResponse($result->toArray());
    }
}
