<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateLicenseEndpoint;

trait CreateLicenseEndpointTrait
{
    /**
     * @param CreateLicenseEndpointRequest $args
     * @return CreateLicenseEndpointResponse
     */
    public function createLicenseEndpoint(CreateLicenseEndpointRequest $args)
    {
        $result = parent::createLicenseEndpoint($args->toArray());
        return new CreateLicenseEndpointResponse($result->toArray());
    }
}
