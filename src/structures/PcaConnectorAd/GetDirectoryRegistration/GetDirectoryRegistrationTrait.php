<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetDirectoryRegistration;

trait GetDirectoryRegistrationTrait
{
    /**
     * @param GetDirectoryRegistrationRequest $args
     * @return GetDirectoryRegistrationResponse
     */
    public function getDirectoryRegistration(GetDirectoryRegistrationRequest $args)
    {
        $result = parent::getDirectoryRegistration($args->toArray());
        return new GetDirectoryRegistrationResponse($result->toArray());
    }
}
