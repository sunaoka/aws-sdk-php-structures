<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint;

trait CreateLicenseServerEndpointTrait
{
    /**
     * @param CreateLicenseServerEndpointRequest $args
     * @return CreateLicenseServerEndpointResponse
     */
    public function createLicenseServerEndpoint(CreateLicenseServerEndpointRequest $args)
    {
        $result = parent::createLicenseServerEndpoint($args->toArray());
        return new CreateLicenseServerEndpointResponse($result->toArray());
    }
}
