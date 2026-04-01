<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\InitiateProviderRegistration;

trait InitiateProviderRegistrationTrait
{
    /**
     * @param InitiateProviderRegistrationRequest $args
     * @return InitiateProviderRegistrationResponse
     */
    public function initiateProviderRegistration(InitiateProviderRegistrationRequest $args)
    {
        $result = parent::initiateProviderRegistration($args->toArray());
        return new InitiateProviderRegistrationResponse($result->toArray());
    }
}
