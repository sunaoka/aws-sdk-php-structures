<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistration;

trait CreateRegistrationTrait
{
    /**
     * @param CreateRegistrationRequest $args
     * @return CreateRegistrationResponse
     */
    public function createRegistration(CreateRegistrationRequest $args)
    {
        $result = parent::createRegistration($args->toArray());
        return new CreateRegistrationResponse($result->toArray());
    }
}
