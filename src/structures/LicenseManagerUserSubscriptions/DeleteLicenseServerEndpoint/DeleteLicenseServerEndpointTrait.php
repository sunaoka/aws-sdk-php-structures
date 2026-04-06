<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeleteLicenseServerEndpoint;

trait DeleteLicenseServerEndpointTrait
{
    /**
     * @param DeleteLicenseServerEndpointRequest $args
     * @return DeleteLicenseServerEndpointResponse
     */
    public function deleteLicenseServerEndpoint(DeleteLicenseServerEndpointRequest $args)
    {
        $result = parent::deleteLicenseServerEndpoint($args->toArray());
        return new DeleteLicenseServerEndpointResponse($result->toArray());
    }
}
