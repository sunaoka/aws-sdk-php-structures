<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteLicenseEndpoint;

trait DeleteLicenseEndpointTrait
{
    /**
     * @param DeleteLicenseEndpointRequest $args
     * @return DeleteLicenseEndpointResponse
     */
    public function deleteLicenseEndpoint(DeleteLicenseEndpointRequest $args)
    {
        $result = parent::deleteLicenseEndpoint($args->toArray());
        return new DeleteLicenseEndpointResponse($result->toArray());
    }
}
