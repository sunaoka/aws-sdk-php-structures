<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationVersion;

trait CreateRegistrationVersionTrait
{
    /**
     * @param CreateRegistrationVersionRequest $args
     * @return CreateRegistrationVersionResponse
     */
    public function createRegistrationVersion(CreateRegistrationVersionRequest $args)
    {
        $result = parent::createRegistrationVersion($args->toArray());
        return new CreateRegistrationVersionResponse($result->toArray());
    }
}
