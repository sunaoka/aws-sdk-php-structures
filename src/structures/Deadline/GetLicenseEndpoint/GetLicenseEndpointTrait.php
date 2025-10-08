<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLicenseEndpoint;

trait GetLicenseEndpointTrait
{
    /**
     * @param GetLicenseEndpointRequest $args
     * @return GetLicenseEndpointResponse
     */
    public function getLicenseEndpoint(GetLicenseEndpointRequest $args)
    {
        $result = parent::getLicenseEndpoint($args->toArray());
        return new GetLicenseEndpointResponse($result->toArray());
    }
}
