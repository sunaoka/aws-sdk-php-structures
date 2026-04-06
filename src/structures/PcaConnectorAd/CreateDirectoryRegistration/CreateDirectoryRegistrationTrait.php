<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateDirectoryRegistration;

trait CreateDirectoryRegistrationTrait
{
    /**
     * @param CreateDirectoryRegistrationRequest $args
     * @return CreateDirectoryRegistrationResponse
     */
    public function createDirectoryRegistration(CreateDirectoryRegistrationRequest $args)
    {
        $result = parent::createDirectoryRegistration($args->toArray());
        return new CreateDirectoryRegistrationResponse($result->toArray());
    }
}
